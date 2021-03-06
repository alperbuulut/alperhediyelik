<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
	    $this->call(PostsTableSeeder::class);
	    $this->command->info('Seeding Posts ...');

	    $this->call(UsersTableSeeder::class);
	    $this->command->info('Seeding Users ...');

	    $this->call(ProductsTableSeeder::class);
	    $this->command->info('Seeding Products ...');

	    $this->call(CategoriesTableSeeder::class);
	    $this->command->info('Seeding Categories ...');
    }
}
