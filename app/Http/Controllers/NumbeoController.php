<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use App\Models\Numbeo;
use App\Models\Subscription;
use App\Models\UserCityCompare;
use App\Models\NumbeoCity;
use App\Models\NumbeoRankingCities;
use App\Models\NumbeoCityPrices;
use App\Models\NumbeoCityHealthcare;
use App\Models\NumbeoCityPollution;
use App\Models\NumbeoCityCrime;
use App\Models\NumbeoCityTraffic;

use Illuminate\Support\Facades\Auth;

class NumbeoController extends Controller
{

	protected $numbeo_key;

	public function __construct() {
		$this->numbeo_key = Config::get('external_api.api_data_key');
	}

    public function index() 
    {
        $data = [];

        $data['cities'] = NumbeoCity::all();
        $data['rankCitiesCostOfLiving'] = NumbeoRankingCities::all();

        $data['user_cities_compare_list'] = [];

        if (Auth::check()) {
            $user = auth()->user();
            $data['user_cities_compare_list'] = UserCityCompare::where('user_id', $user->id)
               ->orderBy('created_at')
               ->get();
        }

        return view('pages.compare', $data);
    }

    protected function getCityInfo ($city_id) 
    {

        $prices = NumbeoCityPrices::select()->where("city_id", "=", $city_id)->first();
        $result = !empty($prices) ? json_decode($prices->data, true) : [];

        if (Auth::check()) {
            $user = auth()->user();
            if ($user->subscribedToPlan(Config::get('stripe_config.stripe_extra_compare_plans_id'), Config::get('stripe_config.stripe_compare_city_plan_name'))) {

                $healthcare = NumbeoCityHealthcare::select()->where("city_id", "=", $city_id)->first();
                $healthcare_data = !empty($healthcare) ? json_decode($healthcare->data, true) : [];
                $result['healthcare'] = $healthcare_data['healthcare'] ?? [];
                
                $pollution = NumbeoCityPollution::select()->where("city_id", "=", $city_id)->first();
                $pollution_data = !empty($pollution) ? json_decode($pollution->data, true) : [];
                $result['pollution'] = $pollution_data['pollution'] ?? [];

                $crime = NumbeoCityCrime::select()->where("city_id", "=", $city_id)->first();
                $crime_data = !empty($crime) ? json_decode($crime->data, true) : [];
                $result['crime'] = $crime_data['crime'] ?? [];

                $traffic = NumbeoCityTraffic::select()->where("city_id", "=", $city_id)->first();
                $traffic_data = !empty($traffic) ? json_decode($traffic->data, true) : [];
                $result['traffic'] = $traffic_data['traffic'] ?? [];

            }
        }

        return $result;
    }

    public function searchCity(Request $request) 
    {
        return json_encode($this->getCityInfo($request->input("city_id")));
    }

    public function saveCitiesSelection(Request $request) 
    {
        if (!Auth::check() || empty($request->input("name")) || empty($request->input("cities"))) {
            return json_encode(["error" => true]);
        }

        $user = auth()->user();

        if (!empty($request->input("id"))) {
            $selection = UserCityCompare::find($request->input("id"));
        } else {
            $selection = new UserCityCompare;
        }

        $selection->name = $request->input("name");
        $selection->user_id = $user->id;
        $selection->cities = $request->input("cities");

        $selection->save();

        return json_encode(["success" => true, "id" => $selection->id]);
    }

    public function getSelection(Request $request) 
    {
        if (!Auth::check() || empty($request->input("id"))) {
            return json_encode(["error" => true]);
        }

        $user = auth()->user();

        $selection = UserCityCompare::find($request->input("id"));

        if (!$selection || $selection->user_id != $user->id) {
            return json_encode(["error" => true]);
        }

        $cities = explode("|", $selection->cities);

        $result = [];

        foreach ($cities as $city_id) {
            $result[] = $this->getCityInfo($city_id);
        }

        return json_encode(["success" => true, "cities" => $result]);
    }

    public function getSelections()
    {
        $result = [];
        if (Auth::check()) {
            $user = auth()->user();
            $result = UserCityCompare::where('user_id', $user->id)
               ->orderBy('created_at')
               ->get();
        }
        return json_encode(["success" => true, "selections" => $result]);
    }

    public function deleteSelection(Request $request)
    {
        if (!Auth::check() || empty($request->input("id"))) {
            return json_encode(["error" => true]);
        }

        if ($selection = UserCityCompare::find($request->input("id"))) {
            $selection->delete();
            return json_encode(["success" => true]);
        } else {
            return json_encode(["error" => true]);
        }
    }

    public function getNumbeoCities() 
    {
        $numbeo = new Numbeo();
        $numbeo->getNumbeoCities();
        $numbeo->getNumbeoRankingCities();
    }

    public function getNumbeoCitiesPricesData() 
    {
        $numbeo = new Numbeo();
        $numbeo->getNumbeoCitiesData("App\Models\NumbeoCityPrices");
        $numbeo->getNumbeoCitiesData("App\Models\NumbeoCityHealthcare");
        $numbeo->getNumbeoCitiesData("App\Models\NumbeoCityCrime");
        $numbeo->getNumbeoCitiesData("App\Models\NumbeoCityPollution");
        $numbeo->getNumbeoCitiesData("App\Models\NumbeoCityTraffic");
        echo "success";
    }
}
