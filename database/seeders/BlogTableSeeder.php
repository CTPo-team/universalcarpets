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
                'title' => 'Blogs 3',
                'slug' => 'blogs-3',
                'path_image' => '623d91cf2174f.jpg',
            'desc' => '<span style="color: rgb(33, 37, 41); font-family: "Source Sans Pro", sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span>',
            'short_desc' => '<p><span style="color: rgb(33, 37, 41); font-family: "Source Sans Pro", sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
                'status' => 1,
                'view_count' => 1,
                'seo_desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'seo_category' => 'blog',
                'seo_keyword' => 'test blog 1',
                'seo_url' => 'http://localhost/universalcarpets/public',
                'created_at' => '2021-12-25 17:37:22',
                'updated_at' => '2022-03-25 10:43:31',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'blog_category_id' => 1,
                'title' => 'Blogs 4',
                'slug' => 'blogs-4',
                'path_image' => '623d91c516e0a.jpg',
            'desc' => '<p><span style="color: rgb(33, 37, 41); font-family: "Source Sans Pro", sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
            'short_desc' => '<p><span style="color: rgb(33, 37, 41); font-family: "Source Sans Pro", sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
                'status' => 1,
                'view_count' => 1,
                'seo_desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'seo_category' => 'blog',
                'seo_keyword' => 'test blog 2',
                'seo_url' => 'http://localhost/universalcarpets/public',
                'created_at' => '2021-12-25 17:37:50',
                'updated_at' => '2022-03-25 10:43:25',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'blog_category_id' => 1,
                'title' => 'Blogs 2',
                'slug' => 'blogs-2',
                'path_image' => '623d90af03c6d.png',
            'desc' => '<p><span style="color: rgb(33, 37, 41); font-family: "Source Sans Pro", sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
            'short_desc' => '<p><span style="color: rgb(33, 37, 41); font-family: "Source Sans Pro", sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
                'status' => 1,
                'view_count' => 0,
                'seo_desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'seo_category' => 'blog',
                'seo_keyword' => 'test blog 3',
                'seo_url' => 'http://localhost/universalcarpets/public',
                'created_at' => '2021-12-25 17:38:10',
                'updated_at' => '2022-03-25 10:43:14',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'blog_category_id' => 2,
                'title' => 'Blogs 1',
                'slug' => 'blogs-1',
                'path_image' => '623d9045a9a49.png',
            'desc' => '<p><span style="color: rgb(33, 37, 41); font-family: "Source Sans Pro", sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
            'short_desc' => '<p><span style="color: rgb(33, 37, 41); font-family: "Source Sans Pro", sans-serif;">Some quick example text to build on the card title and make up the bulk of the card\'s content.</span><br></p>',
                'status' => 1,
                'view_count' => 5,
                'seo_desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'seo_category' => 'blog',
                'seo_keyword' => 'test blog 4',
                'seo_url' => 'http://localhost/universalcarpets/public',
                'created_at' => '2021-12-25 17:38:46',
                'updated_at' => '2022-03-25 10:43:37',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}