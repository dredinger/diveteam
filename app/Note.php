<?php

namespace App;

class Note extends Model
{

	public function log() 
    {
    	return $this->belongsTo(Log::class);	
    }

    public function scopeFilter($query, $filters)
	{
		if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        
        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
	}
    
}
