<?php

namespace App;

class Log extends Model
{

	private $request;

	public function notes()
	{
		return $this->hasMany(Note::class);
	}

	public function setup($request)
	{
		$this->request = $request;
		$pic = null;
		if (isDay(2)) {
			$path = $this->request->diveboard_picture->store('public/dso-pictures');
			$pic = $this->request->diveboard_picture->hashName();
		}

		return $pic;
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