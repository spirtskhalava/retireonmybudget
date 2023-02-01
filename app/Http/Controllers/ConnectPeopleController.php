<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NumbeoCity;
use App\Models\Gender;
use App\Models\Hobby;
use App\Models\Language;
use App\Models\User;
use App\Models\BudgetRange;

class ConnectPeopleController extends Controller
{

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $genders = Gender::all();
        $budgets = BudgetRange::all();
        return view('pages.connectpeople', ["genders" => $genders, "budgets" => $budgets]);
    }

    public function search(Request $request) 
    {
        $data = $this->getUsersByFilters($request);

        $result = [
            "users" => [],
            "places" => []
        ];

        foreach ($data as $user) {
            if (empty($result['users'][$user->id])) {

                $name = empty($user->username) ? $user->firstname . " " . $user->lastname : $user->username;

                if ($user->min_amount) {
                    if ($user->max_amount) {
                        $budget = $user->min_amount . " - " . $user->max_amount;
                    } else {
                        $budget = $user->min_amount . " +" ;
                    }
                } else {
                    $budget = "";
                }

                $destination_cities = [];
                foreach ($user->destinationCities as $city) {
                    $destination_cities[] = $city->name;
                    $result['places'][] = [
                        "place" => $city->name,
                        "latitude" => $city->lat_decimal,
                        "longitude" => $city->long_decimal,
                        "username" => $name,
                        "user_id" => $user->id
                    ];
                }

                $hobbies = [];
                foreach ($user->hobbies as $hobby) {
                    $hobbies[] = $hobby->name;
                }

                $languages = [];
                foreach ($user->languages as $language) {
                    $languages[] = $language->name;
                }

                $result['users'][$user->id] = [
                    "id" => $user->id,
                    "email" => $user->email,
                    "name" => $name,
                    "picture" => asset($user->picture_profile),
                    "destination_cities" => implode("; ", $destination_cities),
                    "origin_city" => $user->city ? $user->city . ", " . $user->country : "",
                    "gender" => $user->gender ?? "",
                    "hobbies" => implode(", ", $hobbies),
                    "languages" => implode(", ", $languages),
                    "budget" => $budget,
                    "age" => User::getAge($user->dob)
                ];
            }
        }

        return json_encode($result);
    }

    private function getUsersByFilters(Request $request) 
    {
        $data = User::select("users.id", "users.firstname", "users.lastname", "users.email", "users.username", "users.picture_profile", "users.dob", 
        "home_city.name AS city", "home_country.name AS country", "home_city.lat_decimal AS latitude", "home_city.long_decimal AS longitude",
        "genders.name AS gender", "budget_ranges.min_amount", "budget_ranges.max_amount")
        ->leftjoin('cities as home_city', 'users.city_home', '=', 'home_city.id')
        ->leftjoin('countries as home_country', 'home_city.country_id', '=', 'home_country.id')
        ->leftjoin('genders', 'users.gender_id', '=', 'genders.id')
        ->leftjoin('budget_ranges', 'users.budget_range_id', '=', 'budget_ranges.id');

        if (!empty($request->input("filterUsername"))) {
            $data = $data->where('username', 'like', '%'.strtolower($request->input("filterUsername")).'%');
        }

        if (!empty($request->input("filterHomeCities"))) {
            $data = $data->whereIn('home_city.external_db_id', $request->input("filterHomeCities"));
        }

        if (!empty($request->input("filterCities"))) {
            $data = $data->join('destination_city_user', 'users.id', '=', 'destination_city_user.user_id')
            ->join('cities as destination_city', 'destination_city.id', '=', 'destination_city_user.city_id')
            ->whereIn('destination_city.external_db_id', $request->input("filterCities"));
        }

        if (!empty($request->input("filterHobbies"))) {
            $data = $data->join('hobby_user', 'users.id', '=', 'hobby_user.user_id')
            ->whereIn('hobby_user.hobby_id', $request->input("filterHobbies"));
        }

        if (!empty($request->input("filterLanguages"))) {
            $data = $data->join('language_user', 'users.id', '=', 'language_user.user_id')
            ->whereIn('language_user.language_id', $request->input("filterLanguages"));
        }

        if (!empty($request->input("filterGender"))) {
            $data = $data->where('users.gender_id','=', $request->input("filterGender"));
        }

        if (!empty($request->input("filterBudget"))) {
            $data = $data->where('users.budget_range_id','=', $request->input("filterBudget"));
        }

        return $data->limit(100)
            ->get();
    }

    public function getCities(Request $request)
    {
    	$data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = NumbeoCity::select("city_id", DB::raw("CONCAT(city, ', ' ,country) AS name"))
            		->where('city','LIKE',"%$search%")
            		->get();
        }
        return response()->json($data);
    }

    public function getHobbies(Request $request)
    {
    	$data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = Hobby::select("id", "name")
            		->where('name','LIKE',"%$search%")
            		->get();
        }
        return response()->json($data);
    }

    public function getLanguages(Request $request)
    {
    	$data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = Language::select("id", "name")
            		->where('name','LIKE',"%$search%")
            		->get();
        }
        return response()->json($data);
    }
}
