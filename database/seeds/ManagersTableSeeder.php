<?php

use Illuminate\Database\Seeder;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([
			'name' => 'Daniel Redinger',
			'title' => 'Dive Safety Officer',
			'email' => 'dredinger@ldry.com',
			'phone' => '3035614557'
		]);
		DB::table('managers')->insert([
			'name' => 'Wendie Murray',
			'title' => 'Dive Program Coordinator',
			'email' => 'wmurray@ldry.com',
			'phone' => '3035614557'
		]);
		DB::table('managers')->insert([
			'name' => 'Tara Lundquist',
			'title' => 'Volunteer Coordinator',
			'email' => 'tlundquist@ldry.com',
			'phone' => '3035614413'
		]);
		DB::table('managers')->insert([
			'name' => 'Jackie Eisenbaum',
			'title' => 'Volunteer Coordinatorr',
			'email' => 'jeisenbaum@ldry.com',
			'phone' => '3035614474'
		]);
		DB::table('managers')->insert([
			'name' => 'Rob Brynda',
			'title' => 'Curator of Fishes',
			'email' => 'rbrynda@ldry.com',
			'phone' => '3035614467'
		]);
		DB::table('managers')->insert([
			'name' => 'Jessica Miller',
			'title' => 'Assistant Curator of Fishes',
			'email' => 'jlmiller@ldry.com',
			'phone' => '3035614488'
		]);
		DB::table('managers')->insert([
			'name' => 'Meiling Roitz',
			'title' => 'Senior Aquarist',
			'email' => 'mroitz@ldry.com',
			'phone' => '3035614475'
		]);
    }
}
