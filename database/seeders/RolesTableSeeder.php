<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'superadmin',
                'guard_name' => 'web',
                'created_at' => '2021-12-18 13:19:37',
                'updated_at' => '2021-12-18 13:19:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2021-12-18 13:19:44',
                'updated_at' => '2021-12-18 13:19:44',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'user',
                'guard_name' => 'web',
                'created_at' => '2021-12-18 13:19:49',
                'updated_at' => '2021-12-18 13:19:49',
            ),
        ));
        
        
    }
}