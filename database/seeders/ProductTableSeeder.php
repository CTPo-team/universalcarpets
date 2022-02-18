<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product')->delete();
        
        \DB::table('product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_category_id' => 1,
                'product_brand_id' => 1,
                'title' => 'newcol1',
                'slug' => NULL,
                'desc' => NULL,
                'status' => 1,
                'featured' => 0,
                'path_image_thumbnail' => NULL,
                'seo_desc' => '',
                'seo_category' => 'product',
                'seo_keyword' => 'newcol1',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 18:12:05',
                'updated_at' => '2021-12-25 18:12:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_category_id' => 1,
                'product_brand_id' => 1,
                'title' => 'newcol2',
                'slug' => NULL,
                'desc' => NULL,
                'status' => 1,
                'featured' => 0,
                'path_image_thumbnail' => NULL,
                'seo_desc' => '',
                'seo_category' => 'product',
                'seo_keyword' => 'newcol2',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-25 18:12:24',
                'updated_at' => '2021-12-25 18:12:24',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'product_category_id' => 1,
                'product_brand_id' => 1,
                'title' => 'newcol2 new',
                'slug' => 'newcol2-new',
            'desc' => '<p>What is Lorem Ipsum?</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Why do we use it?</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p>Where does it come from?</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>',
                'status' => 1,
                'featured' => 1,
                'path_image_thumbnail' => '1_1644285833.8032.jpg',
            'seo_desc' => 'What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Where does it come from?Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
                'seo_category' => 'product',
                'seo_keyword' => 'newcol2',
                'seo_url' => 'http://localhost/universalcarpets/public',
                'created_at' => '2021-12-25 18:12:39',
                'updated_at' => '2022-02-08 02:03:53',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'product_category_id' => 1,
                'product_brand_id' => 1,
                'title' => 'newcol41',
                'slug' => 'newcol41',
                'desc' => NULL,
                'status' => 1,
                'featured' => 1,
                'path_image_thumbnail' => '1_1644057591.0208.jpg',
                'seo_desc' => '',
                'seo_category' => 'product',
                'seo_keyword' => 'newcol4',
                'seo_url' => 'http://localhost/universalcarpets/public',
                'created_at' => '2021-12-25 18:12:54',
                'updated_at' => '2022-02-05 10:45:04',
                'deleted_at' => '2022-02-05 10:45:04',
            ),
        ));
        
        
    }
}