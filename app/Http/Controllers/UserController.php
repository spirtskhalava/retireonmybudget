<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\City;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Traits\UserTrait;

class UserController extends Controller
{
    use UserTrait;
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    // public function index()
    // {
    //     //
    // }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    // public function create()
    // {
    //     //
    // }

    /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
    public function store()
    {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function edit($id)
    {
        // get the user
        $user = User::find($id);
        $user->dob = date('m-d-Y', strtotime($user->dob));
        $dataForUserEdit = $user->getExtraCatalogsForEditTemplate();
        return view('auth.register', array_merge(['user' => $user], $dataForUserEdit));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
    // public function update($id)
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        if($user->email != $request->email){
            $request->validate([
                'email' => 'required|string|email|max:255|unique:users'
            ]);
            $user->email = $request->email;
        }

        $request->validate([
            'password' => 'string|confirmed|min:8|nullable'
        ]);

        //validate other user fields
        $this->validatateUserCreateEdit($request);

        $this->saveEditFields($user, $request);

        // redirect
        return back()->with('success','Profile successfully updated.');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        //
    }

    public function validateUser(Request $request){
        $status=Subscription::select('stripe_status')->where('user_id', $request->currUser)->get();
        return json_encode($status);
    }

    private function saveEditFields(User $user, Request $request){
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        if($request->password !== null){
            $user->password = Hash::make($request->password);
        }
        $user->connect_with_users = $request->connect_with_users;
        $user->info = $request->info;
        $user->phone = $request->phone;

        $dob = new \DateTime();
        $dob = $dob->createFromFormat("m-d-Y", $request->dob);

        $user->dob = $dob->format('Y-m-d');

        $this->saveAllRelatedDataModels($request, $user);
        $user->save();
    }
}
