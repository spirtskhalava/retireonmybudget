<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Plan extends BasePlan
{
    use HasFactory;

    /**
     * Get the Users with this plan
     */
    public function users(){
        return $this->hasMany(User::class);
    }

    static function getAllPlans(): Collection
    {
        return Plan::all();
    }
}
