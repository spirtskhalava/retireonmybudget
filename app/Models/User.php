<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Illuminate\Support\Facades\Config;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        'connect_with_users',
        'info',
        'phone',
        'picture_profile',
        'dob'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Hobbies that belong to the user
     */
    public function hobbies(){
        return $this->belongsToMany(Hobby::class);
    }

    public function languages(){
        return $this->belongsToMany(Language::class);
    }

    /**
     * Get the user's plan
     */
    public function plan(){
        return $this->belongsTo(Plan::class);
    }

    /**
     * Get user home city
     */
    public function homeCity(){
        return $this->belongsTo(City::class, 'city_home');
    }

    public function getHomeCity(){
        return City::find($this->city_home);
    }

    /**
     * Get user destination cities
     */
    public function destinationCities(){
        return $this->belongsToMany(City::class, 'destination_city_user');
    }

    public function budgetRange(){
        return $this->belongsTo(BudgetRange::class);
    }

    public function gender(){
        return $this->belongsTo(Gender::class);
    }

    /**
     * Get necessary info for register and edit user
     */
    public static function getExtraCatalogsForRegisterTemplate(): array{
        $extraCatalogRegisterArr = [];

        $hobbies = Hobby::select(['id','name'])->orderBy('name')->get();
        $extraCatalogRegisterArr['hobbies'] = $hobbies;

        $languages = Language::select(['id','name'])->orderBy('name')->get();
        $extraCatalogRegisterArr['languages'] = $languages;

        $plans = PlanStripe::getAllPlans()->sortBy('monthlyAmount');
        $plans_registration = [];

        foreach ($plans as $plan) {
            if (Config::get('stripe_config.stripe_extra_compare_plans_id')[0] != $plan->attributes['price_id']) {
                $plans_registration[] = $plan;
            }    
        }

        $extraCatalogRegisterArr['plans'] = $plans_registration;

        $numbeoCities = Numbeo::getNumbeoCitiesFormattedToUseInSelect();
        $extraCatalogRegisterArr['home_cities'] = $numbeoCities;

        $extraCatalogRegisterArr['destinationCities'] = $numbeoCities;

        $budgetRanges = BudgetRange::getAllWithRangeAsString();
        $extraCatalogRegisterArr['budgetRanges'] = $budgetRanges;

        $genders = Gender::all();
        $extraCatalogRegisterArr['genders'] = $genders;

        return $extraCatalogRegisterArr;
    }

    /**
     * Get necessary info for edit user
     */
    public function getExtraCatalogsForEditTemplate(): array{
        //catalogs only for edit
        $onlyEditArr = [];

        $userHobbies = $this->getHobbiesId();
        $onlyEditArr['userHobbies'] =  $userHobbies;

        $userLanguages = $this->getLanguagesId();
        $onlyEditArr['userLanguages'] =  $userLanguages;

        $homeCity = $this->getCityToUseInForm($this->getHomeCity());
        if(!empty($homeCity)){
            $onlyEditArr['homeCity'] =  $homeCity;
        }

        $destinationCities = $this->getCitiesToUseInForm($this->destinationCities);
        if(!empty($destinationCities)){
            $onlyEditArr['userDestinationCities'] = $destinationCities;
        }

        return array_merge(self::getExtraCatalogsForRegisterTemplate(), $onlyEditArr);
    }

    private function getHobbiesId(){
        $userHobbies = [];
        foreach ($this->hobbies as $hobby) {
            $userHobbies[] = $hobby->id;
        }
        return $userHobbies;
    }

    private function getLanguagesId(){
        $userLanguages = [];
        foreach ($this->languages as $language) {
            $userLanguages[] = $language->id;
        }
        return $userLanguages;
    }

    private function getCityToUseInForm($city){
        $cityArr = [];
        if($city !== null){
            $cityArr = $city->getFormattedCityToUseInSelect();
        }
        return $cityArr;
    }

    private function getCitiesToUseInForm($cities){
        $citiesArr = [];
        if ($cities !== null) {
            foreach ($cities as $city) {
                $citiesArr[] = $this->getCityToUseInForm($city);
            }
        }
        return $citiesArr;
    }

    private function getBudgetRangeId(){
        return $this->budgetRange == null ? null : $this->budgetRange->getBudgetRangeFormattedToForm();
    }

    public static function getAge($dob) {
        if (empty($dob)) {
            return "";
        }

        $currentDate = date("Y-m-d");
        $age = date_diff(date_create($dob), date_create($currentDate));

        return $age->format("%y");
    }
}
