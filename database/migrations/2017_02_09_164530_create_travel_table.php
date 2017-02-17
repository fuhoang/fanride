<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function(Blueprint $table) {
            $table->increments('id');
            $table->string('pickup');
            $table->string('dropoff');
            $table->string('travel_date');
            $table->string('return_date');
            $table->string('round_trip');
            $table->string('contribution');
            $table->string('number_of_seats');
            $table->string('ride_details');
            $table->string('flexibility');
            $table->string('team_support');
            $table->string('match_day');
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
        Schema::drop('travels');
    }
}
