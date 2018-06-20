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
        	'name' => "Alper Bulut",
	        'email' => "bulut.alper@windowslive.com",
	        'password' => bcrypt('84628462')
        ]);
        DB::table('users')->insert([
        	'name' => "Erdin Bulut",
	        'email' => "erdinbulut@windowslive.com",
	        'password' => bcrypt('123456')
        ]);
    }
}
