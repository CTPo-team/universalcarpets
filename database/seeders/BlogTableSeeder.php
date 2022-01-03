<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog')->delete();
        
        \DB::table('blog')->insert(array (
            0 => 
            array (
                'id' => 1,
                'blog_category_id' => 1,
                'title' => 'test blog 1',
                'path_image' => '1_1640453842.9295.png',
            'desc' => '<span style="color: rgb(33, 37, 41); font-family: &quot;Source Sans Pro&quot;, sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span>',
            'short_desc' => '<p><span style="color: rgb(33, 37, 41); font-family: &quot;Source Sans Pro&quot;, sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
                'status' => 1,
                'seo_desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'seo_category' => 'blog',
                'seo_keyword' => 'test blog 1',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 17:37:22',
                'updated_at' => '2021-12-25 17:37:22',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'blog_category_id' => 1,
                'title' => 'test blog 2',
                'path_image' => '1_1640453870.6964.png',
            'desc' => '<p><span style="color: rgb(33, 37, 41); font-family: &quot;Source Sans Pro&quot;, sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
            'short_desc' => '<p><span style="color: rgb(33, 37, 41); font-family: &quot;Source Sans Pro&quot;, sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
                'status' => 1,
                'seo_desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'seo_category' => 'blog',
                'seo_keyword' => 'test blog 2',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 17:37:50',
                'updated_at' => '2021-12-25 17:37:50',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'blog_category_id' => 1,
                'title' => 'test blog 3',
                'path_image' => '1_1640453890.8367.jpg',
            'desc' => '<p><span style="color: rgb(33, 37, 41); font-family: &quot;Source Sans Pro&quot;, sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
            'short_desc' => '<p><span style="color: rgb(33, 37, 41); font-family: &quot;Source Sans Pro&quot;, sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
                'status' => 1,
                'seo_desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'seo_category' => 'blog',
                'seo_keyword' => 'test blog 3',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 17:38:10',
                'updated_at' => '2021-12-25 17:38:10',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'blog_category_id' => 1,
                'title' => 'test blog 4',
                'path_image' => '1_1640453926.5953.jpg',
            'desc' => '<p><span style="color: rgb(33, 37, 41); font-family: &quot;Source Sans Pro&quot;, sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
            'short_desc' => '<p><span style="color: rgb(33, 37, 41); font-family: &quot;Source Sans Pro&quot;, sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
                'status' => 1,
                'seo_desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'seo_category' => 'blog',
                'seo_keyword' => 'test blog 4',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 17:38:46',
                'updated_at' => '2021-12-25 17:38:46',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}