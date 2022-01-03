<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImageProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('image_product')->delete();
        
        \DB::table('image_product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'path_image' => '1_1640455925.2427.png',
                'created_at' => '2021-12-25 18:12:05',
                'updated_at' => '2021-12-25 18:12:05',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 2,
                'path_image' => '1_1640455944.5228.png',
                'created_at' => '2021-12-25 18:12:24',
                'updated_at' => '2021-12-25 18:12:24',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 3,
                'path_image' => '1_1640455959.0583.png',
                'created_at' => '2021-12-25 18:12:39',
                'updated_at' => '2021-12-25 18:12:39',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 4,
                'path_image' => '1_1640455974.8813.png',
                'created_at' => '2021-12-25 18:12:54',
                'updated_at' => '2021-12-25 18:12:54',
            ),
        ));
        
        
    }
}