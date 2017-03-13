<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    //
    public function sport()
    {
    	return $this->belongsTo('App\Sport');
    }
}
