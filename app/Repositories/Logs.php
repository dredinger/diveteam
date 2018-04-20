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
		return Log::latest('id')
			->take(5)
			->get();
	}

	public function all()
	{
		return Log::latest('id')
			->get();
	}

	public function paged($number = 10)
	{
		return Log::latest('id')
			->paginate($number);
	}
	
}