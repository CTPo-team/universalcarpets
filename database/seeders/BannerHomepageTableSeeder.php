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
                'path_image' => 'website_Rolex_Sency_02.jpg',
                'title' => NULL,
                'desc' => NULL,
                'button_url' => NULL,
                'status' => 1,
                'created_at' => '2021-12-19 06:00:29',
                'updated_at' => '2021-12-19 06:00:43',
                'deleted_at' => '2021-12-19 06:00:43',
            ),
            1 => 
            array (
                'id' => 2,
                'path_image' => '2_1639897362.jpg',
                'title' => 'test',
                'desc' => '<p>test 123</p>',
                'button_url' => 'google.com',
                'status' => 1,
                'created_at' => '2021-12-19 07:02:42',
                'updated_at' => '2021-12-19 07:43:43',
                'deleted_at' => '2021-12-19 07:43:43',
            ),
            2 => 
            array (
                'id' => 3,
                'path_image' => '2_1639898400.jpg',
                'title' => 'lala 123',
                'desc' => '<p>lala test 1234</p>',
                'button_url' => 'google.com',
                'status' => 0,
                'created_at' => '2021-12-19 07:05:47',
                'updated_at' => '2021-12-19 07:43:45',
                'deleted_at' => '2021-12-19 07:43:45',
            ),
            3 => 
            array (
                'id' => 4,
                'path_image' => '1_1639900016.jpg',
                'title' => 'Madison',
                'desc' => 'FEATURED COLLECTION',
                'button_url' => 'google.com',
                'status' => 1,
                'created_at' => '2021-12-19 07:46:56',
                'updated_at' => '2022-02-18 04:13:11',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}