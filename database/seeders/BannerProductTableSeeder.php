<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannerProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banner_product')->delete();
        
        \DB::table('banner_product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'path_image' => '623db7bf0dd8c.jpg',
                'title' => 'My Product',
                'category' => 'Test',
                'button_title' => 'View',
                'button_url' => 'http://google.com',
            'desc' => '<p><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget commodo ante. Phasellus sed pulvinar quam, a sagittis ipsum. Nullam dapibus sem id augue fringilla, sit amet hendrerit ipsum varius. Vivamus tellus enim, aliquam et quam id, euismod iaculis est. Aenean lacus felis, placerat nec ipsum at, consequat mollis arcu. Integer id quam neque. Suspendisse posuere mi luctus, volutpat turpis eget, vulputate lectus. In id odio quis nunc aliquam eleifend.</span><br></p>',
                'status' => 1,
                'created_at' => '2022-03-25 12:39:13',
                'updated_at' => '2022-03-25 12:39:13',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}