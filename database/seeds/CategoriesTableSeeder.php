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
            'img_path' => 'uploads/category-1/product-1.png',
            'tr' => 'Kolye',
            'en' => 'Necklace',
            'ar' => 'قلادة',
            'slug' => 'necklace'
        ]);
        DB::table('categories')->insert([
            'status' => 'A',
            'img_path' => 'uploads/category-1/product-1.png',
            'tr' => 'Küpe',
            'en' => 'Earring',
            'ar' => 'قرط',
            'slug' => 'earring'
        ]);
        DB::table('categories')->insert([
            'status' => 'A',
            'img_path' => 'uploads/category-1/product-1.png',
            'tr' => 'Yüzük',
            'en' => 'Ring',
            'ar' => 'الخاتم',
            'slug' => 'ring'
        ]);
        DB::table('categories')->insert([
            'status' => 'A',
            'img_path' => 'uploads/category-1/product-1.png',
            'tr' => 'Bilezik',
            'en' => 'Bracelet',
            'ar' => 'سوار',
            'slug' => 'bracelet'
        ]);
        DB::table('categories')->insert([
            'status' => 'A',
            'img_path' => 'uploads/category-1/product-1.png',
            'tr' => 'Diğer',
            'en' => 'Other',
            'ar' => 'آخر',
            'slug' => 'other'
        ]);
    }
}
