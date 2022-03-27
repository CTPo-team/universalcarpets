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
                'slug' => NULL,
                'desc' => NULL,
                'seo_desc' => '',
                'seo_category' => 'blog category',
                'seo_keyword' => 'home blog',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 17:36:13',
                'updated_at' => '2021-12-25 17:36:13',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'News',
                'slug' => 'news-',
            'desc' => '<p><strong style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">Lorem Ipsum</strong><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>',
                'seo_desc' => 'Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'seo_category' => 'blog category',
                'seo_keyword' => 'News',
                'seo_url' => 'http://localhost/universalcarpets/public',
                'created_at' => '2022-03-25 09:49:07',
                'updated_at' => '2022-03-25 09:49:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}