<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    /**
     * Attributes to use in selects
     */

    public $countryName = null;

    public function setLatitudeDec($lat_decimal){
        $this->lat_decimal = $lat_decimal;
    }

    public function setLongitudeDec($long_decimal){
        $this->long_decimal = $long_decimal;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'external_db_id',
        'external_db_type',
        'lat_decimal',
        'long_decimal'
    ];

    /**
     * Get the country
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get users with city as home city
     */
    public function homeUsers(){
        return $this->hasMany(User::class, 'city_home');
    }

    /**
     * Get users with city as destination city
     */
    public function destinationUsers(){
        return $this->belongsToMany(User::class, 'destination_city_user');
    }

    /**
     * Get city with
     */
    public static function findCityByExternalIdAndType($externalDbId, $externalDbType){
        return City::where('external_db_id', $externalDbId)->where('external_db_type', $externalDbType)->get();
    }

    public static function getCityFromInputJson($cityForm) : City{

        $country = Country::firstOrCreate([
            'name' => $cityForm['country']
        ]);

        $city = City::firstOrNew([
            'name' => $cityForm['name'],
            'external_db_id' => $cityForm['external_db_id'],
            'external_db_type' => $cityForm['external_db_type'],
            'lat_decimal' => $cityForm['lat_decimal'],
            'long_decimal' => $cityForm['long_decimal'],
        ]);

        if(!$city->exists){
            $country->cities()->save($city);
            $city->save();
        }

        return $city;
    }

    public function getFormattedCityToUseInSelect(){
        $formattedCity['external_db_id'] = $this->external_db_id;
        $formattedCity['external_db_type'] = $this->external_db_type;
        $formattedCity['name'] = $this->name;
        if(isset($this->country->name)){
            $formattedCity['country'] = $this->country->name;
        }else{
            $formattedCity['country'] = $this->countryName;
        }
        $formattedCity['lat_decimal'] = (float) $this->lat_decimal;
        $formattedCity['long_decimal'] = (float) $this->long_decimal;
        return $formattedCity;
    }
}
