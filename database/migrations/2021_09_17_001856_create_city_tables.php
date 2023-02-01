<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numbeo_cities', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->string('country');
            $table->string('city');
            $table->float('latitude', 15, 10)->nullable();
            $table->float('longitude', 15, 10)->nullable();
            $table->timestamps();
        });

        Schema::create('numbeo_ranking_cities', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->string('country');
            $table->string('city_name');
            $table->float('rent_index')->nullable();
            $table->float('cpi_and_rent_index')->nullable();
            $table->float('restaurant_price_index')->nullable();
            $table->float('groceries_index')->nullable();
            $table->float('cpi_index')->nullable();
            $table->float('purchasing_power_incl_rent_index')->nullable();
            $table->integer('ranking');
            $table->timestamps();
        });

        Schema::create('numbeo_city_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->text('data');
            $table->timestamps();
        });

        Schema::create('numbeo_city_healthcare', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->text('data');
            $table->timestamps();
        });

        Schema::create('numbeo_city_pollution', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->text('data');
            $table->timestamps();
        });

        Schema::create('numbeo_city_crime', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->text('data');
            $table->timestamps();
        });

        Schema::create('numbeo_city_traffic', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->text('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('numbeo_cities');
        Schema::dropIfExists('numbeo_ranking_cities');
        Schema::dropIfExists('numbeo_city_prices');
        Schema::dropIfExists('numbeo_city_healthcare');
        Schema::dropIfExists('numbeo_city_pollution');
        Schema::dropIfExists('numbeo_city_crime');
        Schema::dropIfExists('numbeo_city_traffic');
    }
}
