<?php

namespace App;

class Log extends Model
{

	private $request;

	public function setup($request)
	{
		$this->request = $request;
		$pic = null;
		if (isDay(2)) {
			$path = $this->request->diveboard_picture->store('dso-pictures');
			$pic = $this->request->diveboard_picture->hashName();
		}

		return $pic;
	}

}