<?php

namespace App\Repositories;

use App\Log;
use App\Redis;

class Logs 
{
	protected $redis;

	public function __construct(Redis $redis) 
	{
		$this->redis = $redis;
	}

	public function lastFive()
	{
		return Log::latest()
			->take(5)
			->orderBy('created_at', 'desc')
			->get();
	}

	public function all()
	{
		return Log::latest()
			->get();
	}
}