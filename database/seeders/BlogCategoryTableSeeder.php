<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog_category')->delete();
        
        \DB::table('blog_category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'home blog',
                'desc' => NULL,
                'seo_desc' => '',
                'seo_category' => 'blog category',
                'seo_keyword' => 'home blog',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 17:36:13',
                'updated_at' => '2021-12-25 17:36:13',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}