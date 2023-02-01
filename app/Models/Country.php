<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the Country's cities
     */
    public function cities(){
        return $this->hasMany(City::class);
    }

    /**
     * Get country by name
     */
    public static function findCountryByName($name){
        return Country::where('name', $name)->get();
    }
}
