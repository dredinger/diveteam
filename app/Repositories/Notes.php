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
		return Note::latest()
			->take(5)
			->orderBy('created_at', 'desc')
			->get();
	}

	public function all()
	{
		return Note::latest()
			->get();
	}

	public function paged($number = 10)
	{
		return Note::latest()
			->paginate($number);
	}
}