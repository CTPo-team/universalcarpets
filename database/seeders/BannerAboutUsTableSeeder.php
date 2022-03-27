<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannerAboutUsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banner_about_us')->delete();
        
        \DB::table('banner_about_us')->insert(array (
            0 => 
            array (
                'id' => 1,
                'path_image' => '623aeefa2ef01.jpg',
                'title' => 'ABOUT US',
                'created_at' => '2022-03-23 09:57:16',
                'updated_at' => '2022-03-23 09:57:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}