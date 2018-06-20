<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('posts')->insert([
		    'name' => "Ürün-1",
		    'status' => 'A'
	    ]);
	    DB::table('posts')->insert([
		    'name' => "Ürün-2",
		    'status' => 'A'
	    ]);
    }
}
