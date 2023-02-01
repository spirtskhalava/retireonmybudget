<?php

namespace App\Traits;

use App\Models\BudgetRange;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\Gender;
use Illuminate\Support\Facades\Storage;

trait UserTrait {

    public function validatateUserCreateEdit(Request $request){
        $phoneRegex = ['regex:/(^\+?(\(?[0-9 -]\)?)+$)/','between:6,50'];
        $request->validate([
            'firstname' => 'string|max:255',
            'lastname' => 'string|max:255',
            'connect_with_users' => 'boolean',
            'info' => 'string|nullable',
            'phone' => $phoneRegex,
            'hobbies' => 'array|nullable',
            'languages' => 'array|nullable',
            'budget_range' => 'nullable|exists:budget_ranges,id',
            'gender' => 'exists:genders,id',
            'city_home_numbeo' => 'json|nullable',
            'destinationCities' => 'array|nullable',
            'picture_profile' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
            'dob' => 'date_format:m-d-Y'
        ]);
    }

    public function saveAllRelatedDataModels($request, $user){
        $this->saveProfilePicture($request, $user);

        $this->saveBudgetRange($request, $user);

        $this->saveGender($request, $user);

        $this->saveHomeCity($request, $user);

        //Save many to many relations
        $this->saveDestinationCities($request, $user);

        $this->saveHobbies($request, $user);

        $this->saveLanguages($request, $user);
    }

    private function saveProfilePicture(Request $request, User $user){
        if($request->hasFile('picture_profile')){
            $current_time = \Carbon\Carbon::now()->timestamp;
            $filename = $user->id . '-' . $current_time . '-' . $request->picture_profile->getClientOriginalName();
            $path = $request->picture_profile->storeAs('images',$filename,'public');
            $this->deleteProfilePictureFromStorage($user);
            $user->update(['picture_profile' => '/storage/' . $path]);
        }
    }

    private function deleteProfilePictureFromStorage($user){
        $profilePicturePath = $user->picture_profile;
        $disk = 'public';
        if(Storage::disk($disk)->exists($profilePicturePath)){
            Storage::disk($disk)->delete($profilePicturePath);
        }
    }

    private function saveBudgetRange(Request $request, User $user){
        if($request->budget_range != null){
            $budgetRange = BudgetRange::find($request->budget_range);
            $user->budgetRange()->associate($budgetRange);
        }
    }

    private function saveGender(Request $request, User $user){
        $gender = Gender::find($request->gender);
        $user->gender()->associate($gender);
    }

    private function saveHomeCity(Request $request, User $user){
        if($request->city_home_numbeo !== null){
            $home_city = City::getCityFromInputJson(json_decode($request->city_home_numbeo,true));
            $user->homeCity()->associate($home_city);
        }elseif($user->getHomeCity() != null){
            $user->homeCity()->dissociate();
        }
    }

    private function saveDestinationCities(Request $request, User $user){
        if($request->destinationCities !== null){
            $destinationCities = $request->destinationCities;
            $idsToDetach = [];
            $idsWhichRemains = [];
            foreach ($destinationCities as $destiantionCityJson) {
                $destiantionCity = City::getCityFromInputJson(json_decode($destiantionCityJson,true));
                if(!$user->destinationCities->contains($destiantionCity)){
                    $user->destinationCities()->attach($destiantionCity);
                }else{
                    $idsWhichRemains[] = $destiantionCity->id;
                }
            }
            foreach ($user->destinationCities->except($idsWhichRemains) as $removeElement) {
                $idsToDetach[] = $removeElement->id;
            }
            if(!empty($idsToDetach)){
                $user->destinationCities()->detach($idsToDetach);
            }
        }elseif($user->destinationCities() != null){
            $user->destinationCities()->detach();
        }
    }

    private function saveHobbies(Request $request, User $user){
        if(isset($request->hobbies)){
            $idsToDetach = [];
            $idsWhichRemains = [];
            foreach($request->hobbies as $hobbyId){
                if(!$user->hobbies->contains($hobbyId)){
                    $user->hobbies()->attach($hobbyId);
                }else{
                    $idsWhichRemains[] = $hobbyId;
                }
            }
            foreach ($user->hobbies->except($idsWhichRemains) as $removeElement) {
                $idsToDetach[] = $removeElement->id;
            }
            if(!empty($idsToDetach)){
                $user->hobbies()->detach($idsToDetach);
            }
        }elseif($user->hobbies() != null){
            $user->hobbies()->detach();
        }
    }

    private function saveLanguages(Request $request, User $user){
        if(isset($request->languages)){
            $idsToDetach = [];
            $idsWhichRemains = [];
            foreach($request->languages as $languageId){
                if(!$user->languages->contains($languageId)){
                    $user->languages()->attach($languageId);
                }else{
                    $idsWhichRemains[] = $languageId;
                }
            }
            foreach ($user->languages->except($idsWhichRemains) as $removeElement) {
                $idsToDetach[] = $removeElement->id;
            }
            if(!empty($idsToDetach)){
                $user->languages()->detach($idsToDetach);
            }
        }elseif($user->languages() != null){
            $user->languages()->detach();
        }
    }
}
