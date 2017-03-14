<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function fixtures()
    {
    	return $this->hasMany('App\Fixture');
    }
}
