<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutUsGalleryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('about_us_gallery')->delete();
        
        \DB::table('about_us_gallery')->insert(array (
            0 => 
            array (
                'id' => 1,
                'about_us_id' => 3,
                'path_image' => '1_1641288869.9922.jpg',
                'created_at' => '2022-01-04 09:34:29',
                'updated_at' => '2022-01-04 09:34:29',
            ),
            1 => 
            array (
                'id' => 2,
                'about_us_id' => 3,
                'path_image' => '1_1641288870.0026.jpg',
                'created_at' => '2022-01-04 09:34:30',
                'updated_at' => '2022-01-04 09:34:30',
            ),
            2 => 
            array (
                'id' => 3,
                'about_us_id' => 3,
                'path_image' => '1_1641288870.0076.jpg',
                'created_at' => '2022-01-04 09:34:30',
                'updated_at' => '2022-01-04 09:34:30',
            ),
            3 => 
            array (
                'id' => 4,
                'about_us_id' => 3,
                'path_image' => '1_1641288870.0128.jpg',
                'created_at' => '2022-01-04 09:34:30',
                'updated_at' => '2022-01-04 09:34:30',
            ),
            4 => 
            array (
                'id' => 5,
                'about_us_id' => 3,
                'path_image' => '1_1641288870.0179.jpg',
                'created_at' => '2022-01-04 09:34:30',
                'updated_at' => '2022-01-04 09:34:30',
            ),
            5 => 
            array (
                'id' => 6,
                'about_us_id' => 3,
                'path_image' => '1_1641288870.0231.jpg',
                'created_at' => '2022-01-04 09:34:30',
                'updated_at' => '2022-01-04 09:34:30',
            ),
        ));
        
        
    }
}