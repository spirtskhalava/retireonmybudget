<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetRange extends Model
{
    use HasFactory;

    public $range;

    public function users(){
        return $this->hasMany(User::class);
    }

    public static function getAllWithRangeAsString(){
        $allBudgetRanges = self::all();
        $allBudgetRangesWithRangeAsString = [];
        foreach ($allBudgetRanges as $budgetRange) {
            $allBudgetRangesWithRangeAsString[] = $budgetRange->getBudgetRangeFormattedToForm();
        }
        return $allBudgetRangesWithRangeAsString;
    }

    public function getBudgetRangeFormattedToForm(){
        $this->range = $this->getRangeAsString();
        return $this;
    }

    private function getRangeAsString(){
        $max_amount = ($this->max_amount == null) ? ' +' : " - $this->max_amount";
        return $this->min_amount . $max_amount;
    }
}
