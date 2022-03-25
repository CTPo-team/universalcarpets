<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannerContactUsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banner_contact_us')->delete();
        
        \DB::table('banner_contact_us')->insert(array (
            0 => 
            array (
                'id' => 1,
                'path_image' => '623aef17d9538.jpg',
                'title' => 'CONTACTS',
                'created_at' => '2022-03-23 09:57:45',
                'updated_at' => '2022-03-23 09:57:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}