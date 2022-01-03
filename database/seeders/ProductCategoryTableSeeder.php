<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_category')->delete();
        
        \DB::table('product_category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_category_id' => NULL,
                'title' => 'home product',
                'desc' => NULL,
                'sub_category' => NULL,
                'seo_desc' => '',
                'seo_category' => 'product category',
                'seo_keyword' => 'home product',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 18:11:28',
                'updated_at' => '2021-12-25 18:11:28',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}