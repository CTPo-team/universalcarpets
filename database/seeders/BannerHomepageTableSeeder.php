<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannerHomepageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banner_homepage')->delete();
        
        \DB::table('banner_homepage')->insert(array (
            0 => 
            array (
                'id' => 1,
                'path_image' => '623d977b736b5.jpg',
                'title' => 'Madison',
                'category' => 'FEATURED COLLECTION',
                'button_title' => 'VIEW PRODUCT',
                'button_url' => 'http://google.com',
                'status' => 1,
                'created_at' => '2022-03-25 10:21:00',
                'updated_at' => '2022-03-25 10:21:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'path_image' => '623d979a18745.jpg',
                'title' => 'Paris',
                'category' => 'Test Category',
                'button_title' => 'Details',
                'button_url' => 'http://google.com',
                'status' => 1,
                'created_at' => '2022-03-25 10:21:20',
                'updated_at' => '2022-03-25 10:21:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}