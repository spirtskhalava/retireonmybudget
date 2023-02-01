<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class BasePlan extends Model
{

    public $name;
    public $description;
    public $monthlyAmount;

    abstract static function getAllPlans() : Collection;

    // public function getName(){
    //     return $this->name;
    // }

    // public function setName(String $name){
    //     $this->name = $name;
    // }

    // public function getDescription(){
    //     return $this->description;
    // }

    // public function setDescription(String $description){
    //     $this->description = $description;
    // }

    // public function getMonthlyAmount(){
    //     return $this->monthlyAmount;
    // }

    // public function setMonthlyAmount($monthlyAmount){
    //     $this->monthlyAmount = $monthlyAmount;
    // }
}
