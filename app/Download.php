<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    public function scopeVisible($query)
    {
    	return $query->where('hidden', 0);
    }
}
