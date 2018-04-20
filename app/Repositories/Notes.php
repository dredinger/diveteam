<?php

namespace App\Repositories;

use App\Note;
use App\Redis;

class Notes 
{
	protected $redis;

	public function __construct(Redis $redis) 
	{
		$this->redis = $redis;
	}

	public function lastFive()
	{
		return Note::latest('id')
			->take(5)
			->get();
	}

	public function all()
	{
		return Note::latest('id')
			->get();
	}

	public function paged($number = 10)
	{
		return Note::latest('id')
			->paginate($number);
	}
}