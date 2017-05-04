<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	
    public function scopeActive($query)
    {
    	return $query->where('hidden', 0);
    }
}