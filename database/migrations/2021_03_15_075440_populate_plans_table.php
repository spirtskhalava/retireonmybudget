<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PopulatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('plans')->insert(array(
            array('name' => 'Free', 'description' => 'Free plan', 'monthly_amount' => 0.00),
            array('name' => 'Pro', 'description' => 'Do you want to contact other cool people like you, then you should try this', 'monthly_amount' => 10.00)
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('plans')->delete();
    }
}
