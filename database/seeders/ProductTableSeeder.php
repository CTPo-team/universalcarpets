<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product')->delete();
        
        \DB::table('product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_category_id' => 1,
                'title' => 'newcol1',
                'desc' => NULL,
                'status' => 1,
                'seo_desc' => '',
                'seo_category' => 'product',
                'seo_keyword' => 'newcol1',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 18:12:05',
                'updated_at' => '2021-12-25 18:12:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_category_id' => 1,
                'title' => 'newcol2',
                'desc' => NULL,
                'status' => 1,
                'seo_desc' => '',
                'seo_category' => 'product',
                'seo_keyword' => 'newcol2',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 18:12:24',
                'updated_at' => '2021-12-25 18:12:24',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'product_category_id' => 1,
                'title' => 'newcol2',
                'desc' => NULL,
                'status' => 1,
                'seo_desc' => '',
                'seo_category' => 'product',
                'seo_keyword' => 'newcol2',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 18:12:39',
                'updated_at' => '2021-12-25 18:12:39',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'product_category_id' => 1,
                'title' => 'newcol4',
                'desc' => NULL,
                'status' => 1,
                'seo_desc' => '',
                'seo_category' => 'product',
                'seo_keyword' => 'newcol4',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 18:12:54',
                'updated_at' => '2021-12-25 18:12:54',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}