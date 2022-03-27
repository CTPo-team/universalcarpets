<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannerBlogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banner_blog')->delete();
        
        \DB::table('banner_blog')->insert(array (
            0 => 
            array (
                'id' => 1,
                'path_image' => '623aef2c47627.jpg',
                'title' => 'Blog & Articles',
                'created_at' => '2022-03-23 09:58:05',
                'updated_at' => '2022-03-23 09:58:05',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}