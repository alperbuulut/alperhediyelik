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
            'status' => 'A',
            'cname_TR' => 'Kolye',
            'cname_EN' => 'Necklace',
            'cname_AR' => 'قلادة',
            'slug' => 'necklace'
        ]);
        DB::table('categories')->insert([
            'status' => 'A',
            'cname_TR' => 'Küpe',
            'cname_EN' => 'Earring',
            'cname_AR' => 'قرط',
            'slug' => 'earring'
        ]);
        DB::table('categories')->insert([
            'status' => 'A',
            'cname_TR' => 'Yüzük',
            'cname_EN' => 'Ring',
            'cname_AR' => 'الخاتم',
            'slug' => 'ring'
        ]);
        DB::table('categories')->insert([
            'status' => 'A',
            'cname_TR' => 'Bilezik',
            'cname_EN' => 'Bracelet',
            'cname_AR' => 'سوار',
            'slug' => 'bracelet'
        ]);
        DB::table('categories')->insert([
            'status' => 'A',
            'cname_TR' => 'Diğer',
            'cname_EN' => 'Other',
            'cname_AR' => 'آخر',
            'slug' => 'other'
        ]);
    }
}
