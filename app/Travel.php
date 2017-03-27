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
        'user_id',
        'fixture_id',
        'pickup', 
        'dropoff', 
        'travel_date', 
        'return_date',
        'round_trip',
        'contribution',
        'number_of_seats',
        'ride_details',
        'flexibility',
        'team_support'
    ];

    /**
     *  An travel is owned by a user
     *  @return \Illuminate\Database\Eloquent\Relations\BelongTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function fixture()
    {
        return $this->belongsTo('App\Fixture', 'fixture_id');
    }
}
