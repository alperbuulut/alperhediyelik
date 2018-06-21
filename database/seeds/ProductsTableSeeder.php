<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id' => "1",
            'status' => 'A',
            'img_path' => 'uploads/category-1/product-1.png',
            'pname_tr' => 'Bakır Kolye',
            'pdesc_tr' => 'El işlemesi inceltilmiş saf bakırdan üretilmiştir.',
            'pname_en' => 'Copper Necklace',
            'pdesc_en' => 'The hand process is made from dilute pure copper.',
            'pname_ar' => 'قلادة من النحاس',
            'pdesc_ar' => 'تتم عملية اليد من النحاس النقي المخفف.'
        ]);
        DB::table('products')->insert([
            'category_id' => "2",
            'status' => 'A',
            'img_path' => 'uploads/category-2/product-1.png',
            'pname_tr' => 'Bakır Küpe',
            'pdesc_tr' => 'El işlemesi inceltilmiş saf bakırdan üretilmiştir.',
            'pname_en' => 'Copper Earring',
            'pdesc_en' => 'The hand process is made from dilute pure copper.',
            'pname_ar' => 'قرط من النحاس',
            'pdesc_ar' => 'تتم عملية اليد من النحاس النقي المخفف.'
        ]);
    }
}
