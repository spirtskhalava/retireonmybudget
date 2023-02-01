<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PopulateGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('genders')->insert(array(
            array('name' => 'Unspecified' ),
            array('name' => 'Female' ),
            array('name' => 'Male' )
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('genders')->where('name', '=', 'Unspecified' )->delete();
        DB::table('genders')->where('name', '=', 'Female' )->delete();
        DB::table('genders')->where('name', '=', 'Male' )->delete();
    }
}
