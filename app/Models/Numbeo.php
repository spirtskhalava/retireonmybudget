<?php

namespace App\Models;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use App\Models\NumbeoCity;
use App\Models\NumbeoCityPrices;
use App\Models\NumbeoRankingCities;

class Numbeo
{
    private static $allCities = null;

    public static function getNumbeoInfo(string $end_point, array $params) {

        $url = "https://www.numbeo.com/api/" . $end_point . "?api_key=" . Config::get('external_api.api_data_key');

        if (count($params) > 0) {
            $url .= "&" . http_build_query($params);
        }

        $call = Http::get($url);
        return $call->json();
    }

    public static function getAllCities(){
        self::setAllCities();
        return self::$allCities;
    }

    public static function setAllCities(){
        if(self::$allCities == null){
            self::$allCities = self::getNumbeoInfo("cities", array())['cities'];
        }
    }

    public static function getNumbeoCitiesFormattedToUseInSelect(){
        self::setAllCities();
        $formatedCities = [];
        foreach (self::$allCities as $city) {
            $formatedCities[] = self::getNumbeoCityFormattedToUseInSelect($city);
        }
        return $formatedCities;
    }

    public static function getNumbeoCityFormattedToUseInSelect($numbeoCity){
        $city = new City();
        $city->external_db_id = $numbeoCity['city_id'];
        $city->external_db_type = 'numbeo';
        $city->name = $numbeoCity['city'];
        $city->countryName = $numbeoCity['country'];
        $city->setLatitudeDec(isset($numbeoCity['latitude']) ? $numbeoCity['latitude'] : null);
        $city->setLongitudeDec(isset($numbeoCity['longitude']) ? $numbeoCity['longitude'] : null);

        return $city->getFormattedCityToUseInSelect();
    }

    public static function buildCitySectionArray(array $data) 
    {
        $result = array();

        foreach ($data as $item) {
        	$name = $item['item_name'];
        	$name_exp = explode(", ", $name);
        	$last_index = count($name_exp) - 1;
        	$section_name = $name_exp[$last_index];

        	if (!isset($result[$section_name])) {
        		$result[$section_name] = array();
        	}

        	$result[$section_name][$item['item_id']] = $item;
        	unset($name_exp[$last_index]);
        	$name = implode(", ", $name_exp);
        	$result[$section_name][$item['item_id']]['name'] = $name;
        }

        return $result;
    }

    public static function getCityPrices(array $params) 
    {
        $data = self::getNumbeoInfo("city_prices", $params);

        if (isset($data['error'])) {
            return array("city_id" => $params["city_id"], "name" => $params['name'], "prices" => []);
        }

        $city_prices = self::buildCitySectionArray($data['prices']);

        $rows = $result = ["city_id" => $params["city_id"], "name" => $data['name'], "prices" => $city_prices];
        $result['prices'] = [];

        $section_sort_definition = array("Salaries And Financing", "Rent Per Month", "Markets", "Restaurants", "Utilities (Monthly)", "Clothing And Shoes", "Transportation", "Sports And Leisure", "Childcare", "Buy Apartment Price");

        foreach ($section_sort_definition as $pos => $section) {
            if (isset($rows['prices'][$section])) {
                if ($section == "Salaries And Financing") {
                    if (isset($rows['prices'][$section][105])) {
                        $result['prices']["Local Salaries"] = [$rows['prices'][$section][105]];
                    }
                    $mortage = isset($rows['prices'][$section][106]) ? [$rows['prices'][$section][106]] : [];
                } else {
                    $result['prices'][$section] = $rows['prices'][$section];
                }
            }
        }

        if (isset($mortage)) {
            $result['prices']["Mortage %"] = $mortage;
        }    

        return $result;
    }

    public static function getCityHealthcare(array $params) 
    {
        $data = self::getNumbeoInfo("city_healthcare", $params);

        if (isset($data['error'])) {
            return array("city_id" => $params["city_id"], "name" => $params['name'], "healthcare" => []);
        }

        $result = array(
            "Health Care" => array(
                "Health Care System Index" => isset($data['index_healthcare']) ? round($data['index_healthcare'], 2) : false,
                "Skill and competency of medical staff(%)" => isset($data['skill_and_competency']) ? self::calcPercetangeOfParam($data['skill_and_competency']) : false,
                "Speed in completing examination and reports(%)" => isset($data['speed']) ? self::calcPercetangeOfParam($data['speed']) : false,
                "Equipment for modern diagnosis and treatment(%)" => isset($data['modern_equipment']) ? self::calcPercetangeOfParam($data['modern_equipment']) : false,
                "Accuracy and completeness in filling out reports(%)" => isset($data['accuracy_and_completeness']) ? self::calcPercetangeOfParam($data['accuracy_and_completeness']) : false,
                "Friendliness and courtesy of the staff(%)" => isset($data['friendliness_and_courtesy']) ? self::calcPercetangeOfParam($data['friendliness_and_courtesy']) : false,
                "Responsiveness (waitings) in medical institutions(%)" => isset($data['responsiveness_waitings']) ? self::calcPercetangeOfParam($data['responsiveness_waitings']) : false,
                "Satisfaction with Cost to you(%)" => isset($data['cost']) ? self::calcPercetangeOfParam($data['cost']) : false,
                "Convenience of location for you(%)" => isset($data['location']) ? self::calcPercetangeOfParam($data['location']) : false,
                "Contributors" => $data['contributors'] ?? false,
                //"Last Update" => isset($data['monthLastUpdate']) ? $data['monthLastUpdate'] . "/" . $data['yearLastUpdate'] : false
            )
        );

        $rows = array("city_id" => $params["city_id"], "name" => $data['name'], "healthcare" => $result);

        return $rows;
    }

    public static function getCityCrime(array $params) 
    {
        $data = self::getNumbeoInfo("city_crime", $params);

        if (isset($data['error'])) {
            return array("city_id" => $params["city_id"], "name" => $params['name'], "crime" => []);
        }

        $result = array(
            "Crime" => array(
                "Crime Index" => isset($data['index_crime']) ? round($data['index_crime'], 2) : false,
                "Level of crime(%)" => isset($data['level_of_crime']) ? self::calcPercetangeOfParam($data['level_of_crime']) : false,
                "Crime increasing in the past 3 years(%)" => isset($data['crime_increasing']) ? self::calcPercetangeOfParam($data['crime_increasing']) : false,
                "Worries home broken and things stolen(%)" => isset($data['worried_home_broken']) ? self::calcPercetangeOfParam($data['worried_home_broken']) : false,
                "Worries being mugged or robbed(%)" => isset($data['worried_mugged_robbed']) ? self::calcPercetangeOfParam($data['worried_mugged_robbed']) : false,
                "Worries car stolen(%)" => isset($data['worried_car_stolen']) ? self::calcPercetangeOfParam($data['worried_car_stolen']) : false,
                "Worries things from car stolen(%)" => isset($data['worried_things_car_stolen']) ? self::calcPercetangeOfParam($data['worried_things_car_stolen']) : false,
                "Worries attacked(%)" => isset($data['worried_attacked']) ? self::calcPercetangeOfParam($data['worried_attacked']) : false,
                "Worries being insulted(%)" => isset($data['worried_insulted']) ? self::calcPercetangeOfParam($data['worried_insulted']) : false,
                "Worries being subject to a physical attack because of your skin color, ethnic origin, gender or religion(%)" => isset($data['worried_skin_ethnic_religion']) ? self::calcPercetangeOfParam($data['worried_skin_ethnic_religion']) : false,
                "Problem people using or dealing drugs(%)" => isset($data['problem_drugs']) ? self::calcPercetangeOfParam($data['problem_drugs']) : false,
                "Problem property crimes such as vandalism and theft(%)" => isset($data['problem_property_crimes']) ? self::calcPercetangeOfParam($data['problem_property_crimes']) : false,
                "Problem violent crimes such as assault and armed robbery(%)" => isset($data['problem_violent_crimes']) ? self::calcPercetangeOfParam($data['problem_violent_crimes']) : false,
                "Problem corruption and bribery(%)" => isset($data['problem_corruption_bribery']) ? self::calcPercetangeOfParam($data['problem_corruption_bribery']) : false,
                "Safaty Index(%)" => isset($data['index_safety']) ? round($data['index_safety'], 2) : false,
                "Safety walking alone during daylight(%)" => isset($data['safe_alone_daylight']) ? self::calcPercetangeOfParam($data['safe_alone_daylight']) : false,
                "Safety walking alone during night(%)" => isset($data['safe_alone_night']) ? self::calcPercetangeOfParam($data['safe_alone_night']) : false,
                "Contributors" => $data['contributors'] ?? false,
                //"Last Update" => isset($data['monthLastUpdate']) ? $data['monthLastUpdate'] . "/" . $data['yearLastUpdate'] : false
            )
        );

        $rows = array("city_id" => $params["city_id"], "name" => $params['name'], "crime" => $result);

        return $rows;
    }

    public static function getCityPollution(array $params) 
    {
        $data = self::getNumbeoInfo("city_pollution", $params);

        if (isset($data['error'])) {
            return array("city_id" => $params["city_id"], "name" => $params['name'], "pollution" => []);
        }

        $result = array(
            "Pollution" => array(
                "Pollution Index" => isset($data['index_pollution']) ? round($data['index_pollution'], 2) : false,
                "Air Pollution(%)" => isset($data['air_quality']) ? round(100 - self::calcPercetangeOfParam($data['air_quality']), 2) : false,
                "Drinking Water Pollution and Inaccessibility(%)" => isset($data['drinking_water_quality_accessibility']) ? round(100 - self::calcPercetangeOfParam($data['drinking_water_quality_accessibility']), 2) : false,
                "Dissatisfaction with Garbage Disposal(%)" => isset($data['garbage_disposal_satisfaction']) ? round(100 - self::calcPercetangeOfParam($data['garbage_disposal_satisfaction']), 2) : false,
                "Dirty and Untidy(%)" => isset($data['clean_and_tidy']) ? round(100 - self::calcPercetangeOfParam($data['clean_and_tidy']), 2) : false,
                "Noise and Light Pollution(%)" => isset($data['noise_and_light_pollution']) ? self::calcPercetangeOfParam($data['noise_and_light_pollution']) : false,
                "Water Pollution(%)" => isset($data['water_pollution']) ? self::calcPercetangeOfParam($data['water_pollution']) : false,
                "Dissatisfaction to Spend Time in the City(%)" => isset($data['comfortable_to_spend_time']) ? round(100 - self::calcPercetangeOfParam($data['comfortable_to_spend_time']), 2) : false,
                "Dissatisfaction with Green and Parks in the City(%)" => isset($data['green_and_parks_quality']) ? round(100 - self::calcPercetangeOfParam($data['green_and_parks_quality']), 2) : false,
                "Air quality(%)" => isset($data['air_quality']) ? self::calcPercetangeOfParam($data['air_quality']) : false,
                "Drinking Water Quality and Accessibility(%)" => isset($data['drinking_water_quality_accessibility']) ? self::calcPercetangeOfParam($data['drinking_water_quality_accessibility']) : false,
                "Garbage Disposal Satisfaction(%)" => isset($data['garbage_disposal_satisfaction']) ? self::calcPercetangeOfParam($data['garbage_disposal_satisfaction']) : false,
                "Clean and Tidy(%)" => isset($data['clean_and_tidy']) ? self::calcPercetangeOfParam($data['clean_and_tidy']) : false,
                "Quiet and No Problem with Night Lights(%)" => isset($data['noise_and_light_pollution']) ? 100- self::calcPercetangeOfParam($data['noise_and_light_pollution']) : false,
                "Water Quality(%)" => isset($data['water_pollution']) ? round(100 - self::calcPercetangeOfParam($data['water_pollution']), 2) : false,
                "Comfortable to Spend Time in the City(%)" => isset($data['comfortable_to_spend_time']) ? self::calcPercetangeOfParam($data['comfortable_to_spend_time']) : false,
                "Quality of Green and Parks(%)" => isset($data['green_and_parks_quality']) ? self::calcPercetangeOfParam($data['green_and_parks_quality']) : false,
                "Contributors" => $data['contributors'] ?? false,
                //"Last Update" => isset($data['monthLastUpdate']) ? $data['monthLastUpdate'] . "/" . $data['yearLastUpdate'] : false
            )
        );

        $rows = array("city_id" => $params["city_id"], "name" => $data['name'], "pollution" => $result);

        return $rows;
    }

    public static function getCityTraffic(array $params) 
    {
        $data = self::getNumbeoInfo("city_traffic", $params);

        if (isset($data['error'])) {
            return array("city_id" => $params["city_id"], "name" => $params['name'], "traffic" => []);
        }

        $result = array(
            "Traffic Indexes" => array(
                "Traffic Index" => isset($data['index_traffic']) ? round($data['index_traffic'], 2) : false,
                "Time Index" => isset($data['index_time']) ? round($data['index_time'], 2) : false,
                "CO2 Emission Index" => isset($data['index_co2_emission']) ? round($data['index_co2_emission'], 2) : false
            ),
            "Main Means of Transportation to Work or School" => array(
                "Working from Home(%)" => isset($data['primary_means_percentage_map']['Working from Home']) ? round($data['primary_means_percentage_map']['Working from Home'], 2) : false,
                "Walking(%)" => isset($data['primary_means_percentage_map']['Walking']) ? round($data['primary_means_percentage_map']['Walking'], 2) : false,
                "Car(%)" => isset($data['primary_means_percentage_map']['Car']) ? round($data['primary_means_percentage_map']['Car'], 2) : false,
                "Bike(%)" => isset($data['primary_means_percentage_map']['Bike']) ? round($data['primary_means_percentage_map']['Bike'], 2) : false,
                "Motorbike(%)" => isset($data['primary_means_percentage_map']['Motorbike']) ? round($data['primary_means_percentage_map']['Motorbike'], 2) : false,
                "Bus/Trolleybus(%)" => isset($data['primary_means_percentage_map']['Bus']) ? round($data['primary_means_percentage_map']['Bus'], 2) : false,
                "Tram/Streetcar(%)" => isset($data['primary_means_percentage_map']['Tram']) ? round($data['primary_means_percentage_map']['Tram'], 2) : false,
                "Train/Metro(%)" => isset($data['primary_means_percentage_map']['Train']) ? round($data['primary_means_percentage_map']['Train'], 2) : false,
            ),
            "Overall Average Travel Time and Distance to Work (School)" => array(
                "Distance(km)" => isset($data['overall_average_analyze']['distance']) ? round($data['overall_average_analyze']['distance']) : false,
                "Walking(min)" => isset($data['overall_average_analyze']['time_walking']) ? round($data['overall_average_analyze']['time_walking']) : false,
                "Waiting(min)" => isset($data['overall_average_analyze']['time_waiting']) ? round($data['overall_average_analyze']['time_waiting']) : false,
                "Driving(min)" => isset($data['overall_average_analyze']['time_driving']) ? round($data['overall_average_analyze']['time_driving']) : false,
                "Bus/Trolleybus Ride(min)" => isset($data['overall_average_analyze']['time_bus']) ? round($data['overall_average_analyze']['time_bus']) : false,
                "Train/Metro Ride(min)" => isset($data['overall_average_analyze']['time_train']) ? round($data['overall_average_analyze']['time_train']) : false,
                "Bike Ride(min)" => isset($data['overall_average_analyze']['time_bike']) ? round($data['overall_average_analyze']['time_bike']) : false,
                "Tram/Streetcat Ride(min)" => isset($data['overall_average_analyze']['time_tram']) ? round($data['overall_average_analyze']['time_tram']) : false,
                "Motorbike Ride(min)" => isset($data['overall_average_analyze']['time_motorbike']) ? round($data['overall_average_analyze']['time_motorbike']) : false
            )
        );

        $rows = array("city_id" => $params["city_id"], "name" => $data['name'], "traffic" => $result);

        return $rows;
    }

    public static function calcPercetangeOfParam($value) {
        //calculate percentage for the minimum -2 and maximum 2 params
        return round((($value + 2) / 4 * 100), 2);
    }

    public function getNumbeoCities() 
    {
        $data = [];

        $cities = $this->getNumbeoInfo("cities", array());
            
        foreach ($cities['cities'] as $city) {
            $result = NumbeoCity::where('city_id', $city['city_id'])->first();
            if (empty($result)) {
                $new_city = new NumbeoCity(); 
                $new_city->city_id = $city['city_id'];
                $new_city->country = $city['country'];
                $new_city->city = $city['city'];
                $new_city->latitude = $city['latitude'] ?? null;
                $new_city->longitude = $city['longitude'] ?? null;
                $new_city->save();
            }
        }

        return true;
    }

    public function getNumbeoRankingCities() 
    {
        $data = [];

        $cities = $this->getNumbeoInfo("rankings_by_city_current", array("section" => 1));

        if (count($cities)) {
            NumbeoRankingCities::truncate();
            foreach ($cities as $pos => $city) {
                $new_city = new NumbeoRankingCities(); 
                $new_city->city_id = $city['city_id'];
                $new_city->country = $city['country'];
                $new_city->city_name = $city['city_name'];
                $new_city->cpi_and_rent_index = $city['cpi_and_rent_index'] ?? null;
                $new_city->rent_index = $city['rent_index'] ?? null;
                $new_city->purchasing_power_incl_rent_index = $city['purchasing_power_incl_rent_index'] ?? null;
                $new_city->restaurant_price_index = $city['restaurant_price_index'] ?? null;
                $new_city->groceries_index = $city['groceries_index'] ?? null;
                $new_city->cpi_index = $city['cpi_index'] ?? null;
                $new_city->ranking = $pos + 1;
                $new_city->save();
            }
        } 

        return true;
    }

    public function getNumbeoCitiesData($class, $limit = 10) 
    {
        $cities = NumbeoCity::getCitiesPendingData((new $class)->getTable(), $limit);

        if (empty($cities)) {
            $cities = $class::getCitiesToUpdateData((new $class)->getTable(), $limit);
        }

        foreach ($cities as $city) {
            $city_price = $class::getData($city->city_id);

            $city_params = array(
                "city_id" => $city->city_id,
                "name" => $city->city . ", " . $city->country,
                "currency" => "USD"
            );

            $result = $this->getCityData($class, $city_params);

            if (empty($city_price)) {
                $city_price = new $class; 
                $city_price->city_id = $city->city_id;
                $city_price->data = json_encode($result);
                $city_price->save();
            } elseif (!empty($result[$this->getCityArrayKey($class)])) {
                $city_price->data = json_encode($result);
                $city_price->update();
            }
        }

        return true;
    }

    protected function getCityData($class, $city_params)
    {
        switch ($class) {
            case "App\Models\NumbeoCityPrices":
                return self::getCityPrices($city_params);
            case "App\Models\NumbeoCityHealthcare":
                return self::getCityHealthcare($city_params);
            case "App\Models\NumbeoCityCrime":
                return self::getCityCrime($city_params);
            case "App\Models\NumbeoCityPollution":
                return self::getCityPollution($city_params);
            case "App\Models\NumbeoCityTraffic":
                return self::getCityTraffic($city_params);
        }

        return false;
    }

    protected function getCityArrayKey($class)
    {
        switch ($class) {
            case "App\Models\NumbeoCityPrices":
                return 'prices';
            case "App\Models\NumbeoCityHealthcare":
                return 'healthcare';
            case "App\Models\NumbeoCityCrime":
                return 'crime';
            case "App\Models\NumbeoCityPollution":
                return 'pollution';
            case "App\Models\NumbeoCityTraffic":
                return 'traffic';
        }

        return false;
    }

}
