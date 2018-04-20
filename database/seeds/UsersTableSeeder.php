<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			'name' => 'Main',
			'email' => 'dredinger@ldry.com',
			'password' => Hash::make('diveteam'),
		]);
	}
}
