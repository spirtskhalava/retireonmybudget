<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumbeoCity extends Model
{
    use HasFactory;

    protected $table = 'numbeo_cities';

    public static function getCitiesToUpdateData($table, $limit = 10) {
        $cities = self::select(["numbeo_cities.*"])
            ->leftJoin($table, 'numbeo_cities.city_id', '=', $table . '.city_id')
            ->orderBy($table . '.updated_at', 'ASC')
            ->offset(0)->limit($limit)->get();
        return $cities;
    }

    public static function getCitiesPendingData($table, $limit = 10) {
        $cities = self::select(["numbeo_cities.*"])
            ->leftJoin($table, 'numbeo_cities.city_id', '=', $table . '.city_id')
            ->where($table . '.city_id', '=', NULL)
            ->offset(0)->limit($limit)->get();
        return $cities;
    }

}
