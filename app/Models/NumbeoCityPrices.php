<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumbeoCityPrices extends Model
{
    use HasFactory;

    protected $table = 'numbeo_city_prices';

    public static function getData($city_id) 
    {
        return self::select()
            ->where('city_id', '=', $city_id)
            ->first();
    }
}
