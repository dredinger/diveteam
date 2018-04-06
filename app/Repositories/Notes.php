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

	public function all()
	{
		return Note::latest()
			->get();
	}
}