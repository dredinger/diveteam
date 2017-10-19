<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Log extends Model
{

	private $request;

	public function setup($request)
	{
		$this->request = $request;
		$pic = null;
		if (isDay(5)) {
			$photoName = time() . '.' . $this->request->diveboard_picture->getClientOriginalExtension();
			$request->diveboard_picture->move(public_path('dsopictures'), $photoName);

			$pic = $photoName;
		}

		return $pic !== null;
	}

	public function create()
	{
		
	}
}