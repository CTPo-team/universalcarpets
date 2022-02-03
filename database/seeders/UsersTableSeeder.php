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
                'password' => '$2y$10$fRumQL6xvPoiHw7Wb7no8OoqzQDJnyMQtPtIoTtV2K6Ljk.5YhCJG',
                'roles_name' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2021-12-15 09:47:42',
                'updated_at' => '2022-02-03 04:51:52',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'superadmin',
                'email' => 'superadmin@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UgXUFb9qF06hTm47DqgvEeDWeKny5F4zrAAuTtx6pdHbUL5BZEcDG',
                'roles_name' => 'superadmin',
                'remember_token' => NULL,
                'created_at' => '2022-02-03 04:51:35',
                'updated_at' => '2022-02-03 04:51:35',
            ),
        ));
        
        
    }
}