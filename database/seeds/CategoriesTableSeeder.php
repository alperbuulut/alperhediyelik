<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => "1",
            'category_name' => 'Bakır Kolyeler'
        ]);
        DB::table('categories')->insert([
            'id' => "2",
            'category_name' => 'Bakır Küpeler'
        ]);
        DB::table('categories')->insert([
            'id' => "3",
            'category_name' => 'Bakır Yüzükler'
        ]);
        DB::table('categories')->insert([
            'id' => "4",
            'category_name' => 'Bakır Bilezikler'
        ]);
    }
}
