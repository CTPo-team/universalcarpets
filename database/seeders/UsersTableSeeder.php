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
                'password' => '$2y$10$5lX1Rk3qE2A1.U0TNNaMf.RT.bHi/Dy7ubo0IUzHW8qfGSywHGj/S',
                'remember_token' => NULL,
                'roles' => 'admin',
                'created_at' => '2021-12-15 09:47:42',
                'updated_at' => '2021-12-15 09:47:42',
            ),
        ));
        
        
    }
}