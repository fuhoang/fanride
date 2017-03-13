<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    /**
     * Get the league associated to sport
     */
    public function leagues()
    {
    	return $this->hasMany('App\League');
    }
}
