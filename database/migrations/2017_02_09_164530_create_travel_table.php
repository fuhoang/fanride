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
            $table->integer('user_id')->unsigned();
            $table->integer('fixture_id')->unsigned();
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
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('fixture_id')
                  ->references('id')
                  ->on('fixtures')
                  ->onDelete('cascade');
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
