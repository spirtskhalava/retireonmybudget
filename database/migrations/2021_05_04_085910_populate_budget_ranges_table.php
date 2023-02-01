<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PopulateBudgetRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('budget_ranges')->insert(array(
            array('min_amount' => 600, "max_amount" =>	800),
            array('min_amount' => 800, "max_amount" =>	1200),
            array('min_amount' => 1200, "max_amount" =>	1600),
            array('min_amount' => 1600, "max_amount" =>	2200),
            array('min_amount' => 2200, "max_amount" =>	2800),
            array('min_amount' => 2800, "max_amount" =>	3200),
            array('min_amount' => 3200, "max_amount" =>	3600),
            array('min_amount' => 3600, "max_amount" =>	4000),
            array('min_amount' => 4000, "max_amount" =>	4600),
            array('min_amount' => 4600, "max_amount" =>	5200),
            array('min_amount' => 5200, "max_amount" => null)
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('budget_ranges')->where('min_amount', '=', 600)->delete();
        DB::table('budget_ranges')->where('min_amount', '=', 800)->delete();
        DB::table('budget_ranges')->where('min_amount', '=', 1200)->delete();
        DB::table('budget_ranges')->where('min_amount', '=', 1600)->delete();
        DB::table('budget_ranges')->where('min_amount', '=', 2200)->delete();
        DB::table('budget_ranges')->where('min_amount', '=', 2800)->delete();
        DB::table('budget_ranges')->where('min_amount', '=', 3200)->delete();
        DB::table('budget_ranges')->where('min_amount', '=', 3600)->delete();
        DB::table('budget_ranges')->where('min_amount', '=', 4000)->delete();
        DB::table('budget_ranges')->where('min_amount', '=', 4600)->delete();
        DB::table('budget_ranges')->where('min_amount', '=', 5200)->delete();
    }
}
