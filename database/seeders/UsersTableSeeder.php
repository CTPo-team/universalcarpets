<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bDkKvIOKcno97ELSCKfRCenPzkJnM8LGIxfTBbRH/MR6XcnHlGuJm',
                'remember_token' => NULL,
                'created_at' => '2021-12-15 09:47:42',
                'updated_at' => '2021-12-24 08:24:21',
                'roles_name' => 'superadmin'
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'email' => 'user@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Tv64srtdZ1z2Qt/a8JQZZOkMrPUrHYSiTcTZVovNGMvJy3zgaxRy2',
                'remember_token' => NULL,
                'created_at' => '2021-12-24 08:24:45',
                'updated_at' => '2021-12-24 08:24:45',
                'roles_name' => 'user'
            ),
        ));
        
        
    }
}