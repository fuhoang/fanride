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
            $table->datetime('travel_date');
            $table->datetime('return_date');
            $table->tinyInteger('round_trip')->default(0);
            $table->string('contribution');
            $table->string('number_of_seats');
            $table->longText('ride_details');
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
