<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pickup', 
        'dropoff', 
        'travel_date', 
        'return_date',
        'round_trip',
        'contribution',
        'number_of_seats',
        'ride_details',
        'flexibility',
        'team_support',
        'match_day' 
    ];
}
