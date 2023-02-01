<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisteredUserToAdmin;
use App\Models\PlanStripe;
use App\Models\User;
use App\Models\City;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use App\Traits\UserTrait;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
    use UserTrait;

    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $stripeDataToGetPaymentMethod = ['intent' => $this->user->createSetupIntent(), 'stripepk' => Config::get('stripe.stripe_key')];
        $dataForRegistrationArr = array_merge( User::getExtraCatalogsForRegisterTemplate(), $stripeDataToGetPaymentMethod);

        return view('auth.register', $dataForRegistrationArr);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'plan_price' => 'required',
            'dob' => 'date',
            'dob' => 'date_format:m-d-Y',
            'stripePromotionCode' => 'nullable|string'
        ]);

        if(!$request->has('terms-use-privacy-agreement')){
            return back()->with('error','You must agree the terms of use and the privacy policy.')->withInput();
        }

        $this->validatateUserCreateEdit($request);
        $plan = $this->getPlanFromRequest($request);
        if(!$plan->isValidPlanPaymentMethodForSelectedPrice()){
            return back()->with('error','You must provide a payment method for a non-Free plan.')->withInput();
        }
        if($request->stripePromotionCode != null && !$plan->isValidPromotionCode() && $plan->isPaidPlan()){
            return back()->with('error', 'The promotion code is incorrect or no longer available.')->withInput();
        }

        $dob = new \DateTime();
        $dob = $dob->createFromFormat("m-d-Y", $request->dob);

        Auth::login($user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'connect_with_users' => $request->connect_with_users,
            'info' => $request->info,
            'phone' => $request->phone,
            'dob' => $dob->format('Y-m-d')
        ]));

        $this->saveAllRelatedDataModels($request, $user);
        $this->savePlanStripe($plan, $user);

        $user->save();

        $adminMail = "community@retireonmybudget.com";
        Mail::to($adminMail)->send(new RegisteredUserToAdmin($user));

        event(new Registered($user));

        return redirect()->route('compare');
    }

    private function getPlanFromRequest(Request $request){
        $plan = new PlanStripe();
        $plan->setProductStripeByPriceId($request->plan_price);
        $plan->setPaymentMethod($request->paymentMethod);
        $plan->setCouponFromPromotionCode($request->stripePromotionCode);
        return $plan;
    }

    private function savePlanStripe(PlanStripe $plan, User $user){
        if($plan->getCoupon() !== null){
            $user->newSubscription(
                Config::get('stripe_config.stripe_compare_city_plan_name'), $plan->getSelectedPrice()->id
            )->withCoupon($plan->getCoupon())->create($plan->getPaymentMethod());
        }else{
            $user->newSubscription(
                Config::get('stripe_config.stripe_compare_city_plan_name'), $plan->getSelectedPrice()->id
            )->create($plan->getPaymentMethod());
        }
    }
}
