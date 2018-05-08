<?php

namespace App;

class Log extends Model
{

	public function notes()
	{
		return $this->hasMany(Note::class);
	}

	public function setup($request)
	{
		$pic = null;

		if (!$request->hasFile('diveboard_picture') || !$request->file('diveboard_picture')->isValid())
			return false;

		$path = $request->diveboard_picture->store('public/dso-pictures');
		$pic = $request->diveboard_picture->hashName();

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