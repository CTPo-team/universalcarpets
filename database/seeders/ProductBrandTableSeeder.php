<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductBrandTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_brand')->delete();
        
        \DB::table('product_brand')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Al Namaz',
                'slug' => 'al-namaz',
                'created_at' => '2022-01-08 11:13:49',
                'updated_at' => '2022-01-08 11:13:49',
            ),
        ));
        
        
    }
}