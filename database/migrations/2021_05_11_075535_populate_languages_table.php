<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PopulateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('languages')->insert(array(
            array('name' => 'Iranian Persian' ),
            array('name' => 'English' ),
            array('name' => 'Spanish' ),
            array('name' => 'Arabic' ),
            array('name' => 'Bengali' ),
            array('name' => 'Bhojpuri' ),
            array('name' => 'Egyptian Spoken Arabic' ),
            array('name' => 'Filipino' ),
            array('name' => 'French' ),
            array('name' => 'German' ),
            array('name' => 'Gujarati' ),
            array('name' => 'Hausa' ),
            array('name' => 'Hindi' ),
            array('name' => 'Indonesian' ),
            array('name' => 'Italian' ),
            array('name' => 'Japanese' ),
            array('name' => 'Javanese' ),
            array('name' => 'Jinyu Chinese' ),
            array('name' => 'Kannada' ),
            array('name' => 'Korean' ),
            array('name' => 'Mandarin Chinese' ),
            array('name' => 'Marathi' ),
            array('name' => 'Portuguese' ),
            array('name' => 'Russian' ),
            array('name' => 'Swahili' ),
            array('name' => 'Tamil' ),
            array('name' => 'Telugu' ),
            array('name' => 'Thai' ),
            array('name' => 'Turkish' ),
            array('name' => 'Urdu' ),
            array('name' => 'Vietnamese' )
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('languages')->where('name', '=', 'Iranian Persian' )->delete();
        DB::table('languages')->where('name', '=', 'English' )->delete();
        DB::table('languages')->where('name', '=', 'Spanish' )->delete();
        DB::table('languages')->where('name', '=', 'Arabic' )->delete();
        DB::table('languages')->where('name', '=', 'Bengali' )->delete();
        DB::table('languages')->where('name', '=', 'Bhojpuri' )->delete();
        DB::table('languages')->where('name', '=', 'Egyptian Spoken Arabic' )->delete();
        DB::table('languages')->where('name', '=', 'Filipino' )->delete();
        DB::table('languages')->where('name', '=', 'French' )->delete();
        DB::table('languages')->where('name', '=', 'German' )->delete();
        DB::table('languages')->where('name', '=', 'Gujarati' )->delete();
        DB::table('languages')->where('name', '=', 'Hausa' )->delete();
        DB::table('languages')->where('name', '=', 'Hindi' )->delete();
        DB::table('languages')->where('name', '=', 'Indonesian' )->delete();
        DB::table('languages')->where('name', '=', 'Italian' )->delete();
        DB::table('languages')->where('name', '=', 'Japanese' )->delete();
        DB::table('languages')->where('name', '=', 'Javanese' )->delete();
        DB::table('languages')->where('name', '=', 'Jinyu Chinese' )->delete();
        DB::table('languages')->where('name', '=', 'Kannada' )->delete();
        DB::table('languages')->where('name', '=', 'Korean' )->delete();
        DB::table('languages')->where('name', '=', 'Mandarin Chinese' )->delete();
        DB::table('languages')->where('name', '=', 'Marathi' )->delete();
        DB::table('languages')->where('name', '=', 'Portuguese' )->delete();
        DB::table('languages')->where('name', '=', 'Russian' )->delete();
        DB::table('languages')->where('name', '=', 'Swahili' )->delete();
        DB::table('languages')->where('name', '=', 'Tamil' )->delete();
        DB::table('languages')->where('name', '=', 'Telugu' )->delete();
        DB::table('languages')->where('name', '=', 'Thai' )->delete();
        DB::table('languages')->where('name', '=', 'Turkish' )->delete();
        DB::table('languages')->where('name', '=', 'Urdu' )->delete();
        DB::table('languages')->where('name', '=', 'Vietnamese')->delete();
    }
}
