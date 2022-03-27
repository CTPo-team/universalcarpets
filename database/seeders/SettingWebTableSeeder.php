<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingWebTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('setting_web')->delete();
        
        \DB::table('setting_web')->insert(array (
            0 => 
            array (
                'id' => 1,
                'phone' => '+62-21-6583-4789',
                'fax' => '+62-21-6583-4677',
                'email1' => 'ucrugs@universalcarpets.com',
                'email2' => 'yjohar@universalcarpets.com',
                'email_contact_us' => 'admin@mail.com',
                'instagram' => 'https://twitter.com/unicarpetsid',
                'twitter' => 'https://twitter.com/unicarpetsid',
                'facebook' => 'https://www.facebook.com/universalcarpetsid/',
                'youtube' => 'https://www.youtube.com/channel/UCEEc95l98-PdXiDkFtEhQHw',
                'path_image' => '623d7dc3bccb9.png',
                'created_at' => '2021-12-24 16:06:56',
                'updated_at' => '2022-03-25 08:31:02',
            ),
        ));
        
        
    }
}