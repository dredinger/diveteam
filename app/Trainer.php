<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

	public function availability()
	{
		return $this->hasMany(Availability::class);
	}
	
    public function scopeTrainers($query)
    {
    	return $query->where('active', 1);
    }
}