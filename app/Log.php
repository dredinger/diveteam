<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Log extends Model
{
	public function setup($request)
	{
		
		$pic = null;
		if (isDay(5)) {
			$photoName = time() . '.' . $request->diveboard_picture->getClientOriginalExtension();
			$request->diveboard_picture->move(public_path('dsopictures'), $photoName);

			$pic = $photoName;
		}
	}
}