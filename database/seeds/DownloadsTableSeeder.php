<?php

use Illuminate\Database\Seeder;

class DownloadsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('downloads')->insert([
			'name' => 'Dive Physical',
			'type' => 'pdf',
			'location' => 'divephysical',
		]);
		DB::table('downloads')->insert([
			'name' => 'AAUS Dive Safety Manual',
			'type' => 'pdf',
			'location' => 'aausdivemanual',
		]);
		DB::table('downloads')->insert([
			'name' => 'AHA CPR Instructions',
			'type' => 'pdf',
			'location' => 'ahacprinstructions',
		]);
		DB::table('downloads')->insert([
			'name' => 'Volunteer Dive Manual',
			'type' => 'pdf',
			'location' => 'volunteerdivemanual',
		]);
		DB::table('downloads')->insert([
			'name' => 'Dive Academy Checklist',
			'type' => 'pdf',
			'location' => 'academychecklist',
		]);
	}
}
