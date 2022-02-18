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
                'id' => 5,
                'product_id' => 3,
                'path_image' => '1_1644285502.208.jpg',
                'created_at' => '2022-02-08 01:58:22',
                'updated_at' => '2022-02-08 01:58:22',
            ),
            3 => 
            array (
                'id' => 6,
                'product_id' => 3,
                'path_image' => '1_1644285502.2249.jpg',
                'created_at' => '2022-02-08 01:58:22',
                'updated_at' => '2022-02-08 01:58:22',
            ),
            4 => 
            array (
                'id' => 7,
                'product_id' => 3,
                'path_image' => '1_1644285502.2469.jpg',
                'created_at' => '2022-02-08 01:58:22',
                'updated_at' => '2022-02-08 01:58:22',
            ),
        ));
        
        
    }
}