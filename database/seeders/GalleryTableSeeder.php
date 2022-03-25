<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gallery')->delete();
        
        \DB::table('gallery')->insert(array (
            0 => 
            array (
                'id' => 15,
                'code' => '6239d15006d4e',
                'path_image' => '6239d15006d4e.png',
                'type' => 'active',
                'created_at' => '2022-03-22 13:38:24',
                'updated_at' => '2022-03-22 13:38:24',
            ),
            1 => 
            array (
                'id' => 16,
                'code' => '623aeefa2ef01',
                'path_image' => '623aeefa2ef01.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 09:57:14',
                'updated_at' => '2022-03-23 09:57:16',
            ),
            2 => 
            array (
                'id' => 17,
                'code' => '623aef17d9538',
                'path_image' => '623aef17d9538.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 09:57:43',
                'updated_at' => '2022-03-23 10:09:34',
            ),
            3 => 
            array (
                'id' => 18,
                'code' => '623aef2c47627',
                'path_image' => '623aef2c47627.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 09:58:04',
                'updated_at' => '2022-03-23 09:58:05',
            ),
            4 => 
            array (
                'id' => 20,
                'code' => '623af4f8c96cc',
                'path_image' => '623af4f8c96cc.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 10:22:48',
                'updated_at' => '2022-03-23 10:23:33',
            ),
            5 => 
            array (
                'id' => 21,
                'code' => '623af4fc42b81',
                'path_image' => '623af4fc42b81.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 10:22:52',
                'updated_at' => '2022-03-23 10:23:33',
            ),
            6 => 
            array (
                'id' => 22,
                'code' => '623af50c46dd3',
                'path_image' => '623af50c46dd3.png',
                'type' => 'active',
                'created_at' => '2022-03-23 10:23:08',
                'updated_at' => '2022-03-23 10:23:33',
            ),
            7 => 
            array (
                'id' => 23,
                'code' => '623af50c5338e',
                'path_image' => '623af50c5338e.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 10:23:08',
                'updated_at' => '2022-03-23 10:23:33',
            ),
            8 => 
            array (
                'id' => 24,
                'code' => '623af50c57939',
                'path_image' => '623af50c57939.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 10:23:08',
                'updated_at' => '2022-03-23 10:23:33',
            ),
            9 => 
            array (
                'id' => 25,
                'code' => '623af56b38e45',
                'path_image' => '623af56b38e45.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 10:24:43',
                'updated_at' => '2022-03-23 10:25:17',
            ),
            10 => 
            array (
                'id' => 26,
                'code' => '623af56b3e885',
                'path_image' => '623af56b3e885.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 10:24:43',
                'updated_at' => '2022-03-23 10:25:17',
            ),
            11 => 
            array (
                'id' => 27,
                'code' => '623af56b55c63',
                'path_image' => '623af56b55c63.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 10:24:43',
                'updated_at' => '2022-03-23 10:25:17',
            ),
            12 => 
            array (
                'id' => 28,
                'code' => '623af56b5968c',
                'path_image' => '623af56b5968c.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 10:24:43',
                'updated_at' => '2022-03-23 10:25:17',
            ),
            13 => 
            array (
                'id' => 29,
                'code' => '623af56b6ba02',
                'path_image' => '623af56b6ba02.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 10:24:43',
                'updated_at' => '2022-03-23 10:25:17',
            ),
            14 => 
            array (
                'id' => 30,
                'code' => '623af56b84b91',
                'path_image' => '623af56b84b91.jpg',
                'type' => 'active',
                'created_at' => '2022-03-23 10:24:43',
                'updated_at' => '2022-03-23 10:25:17',
            ),
            15 => 
            array (
                'id' => 31,
                'code' => '623d6fc9a5d53',
                'path_image' => '623d6fc9a5d53.gif',
                'type' => 'active',
                'created_at' => '2022-03-25 07:31:21',
                'updated_at' => '2022-03-25 07:31:24',
            ),
            16 => 
            array (
                'id' => 32,
                'code' => '623d7dc3bccb9',
                'path_image' => '623d7dc3bccb9.png',
                'type' => '',
                'created_at' => '2022-03-25 08:30:59',
                'updated_at' => '2022-03-25 08:30:59',
            ),
            17 => 
            array (
                'id' => 33,
                'code' => '623d80b15b418',
                'path_image' => '623d80b15b418.jpg',
                'type' => 'active',
                'created_at' => '2022-03-25 08:43:29',
                'updated_at' => '2022-03-25 09:25:34',
            ),
            18 => 
            array (
                'id' => 34,
                'code' => '623d8ab3efc79',
                'path_image' => '623d8ab3efc79.png',
                'type' => 'active',
                'created_at' => '2022-03-25 09:26:12',
                'updated_at' => '2022-03-25 09:26:34',
            ),
            19 => 
            array (
                'id' => 35,
                'code' => '623d9045a9a49',
                'path_image' => '623d9045a9a49.png',
                'type' => 'active',
                'created_at' => '2022-03-25 09:49:57',
                'updated_at' => '2022-03-25 10:17:08',
            ),
            20 => 
            array (
                'id' => 36,
                'code' => '623d90af03c6d',
                'path_image' => '623d90af03c6d.png',
                'type' => 'active',
                'created_at' => '2022-03-25 09:51:43',
                'updated_at' => '2022-03-25 10:17:25',
            ),
            21 => 
            array (
                'id' => 37,
                'code' => '623d91c516e0a',
                'path_image' => '623d91c516e0a.jpg',
                'type' => 'active',
                'created_at' => '2022-03-25 09:56:21',
                'updated_at' => '2022-03-25 10:17:33',
            ),
            22 => 
            array (
                'id' => 38,
                'code' => '623d91cf2174f',
                'path_image' => '623d91cf2174f.jpg',
                'type' => 'active',
                'created_at' => '2022-03-25 09:56:31',
                'updated_at' => '2022-03-25 10:17:40',
            ),
            23 => 
            array (
                'id' => 39,
                'code' => '623d92d617a24',
                'path_image' => '623d92d617a24.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:00:54',
                'updated_at' => '2022-03-25 10:16:39',
            ),
            24 => 
            array (
                'id' => 40,
                'code' => '623d92dec3529',
                'path_image' => '623d92dec3529.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:01:02',
                'updated_at' => '2022-03-25 10:16:39',
            ),
            25 => 
            array (
                'id' => 41,
                'code' => '623d92dec4f13',
                'path_image' => '623d92dec4f13.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:01:02',
                'updated_at' => '2022-03-25 10:16:39',
            ),
            26 => 
            array (
                'id' => 42,
                'code' => '623d92ded7d06',
                'path_image' => '623d92ded7d06.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:01:02',
                'updated_at' => '2022-03-25 10:16:39',
            ),
            27 => 
            array (
                'id' => 43,
                'code' => '623d92ed44a22',
                'path_image' => '623d92ed44a22.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:01:17',
                'updated_at' => '2022-03-25 10:16:48',
            ),
            28 => 
            array (
                'id' => 44,
                'code' => '623d92f2e446f',
                'path_image' => '623d92f2e446f.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:01:22',
                'updated_at' => '2022-03-25 10:16:48',
            ),
            29 => 
            array (
                'id' => 45,
                'code' => '623d92f2e509b',
                'path_image' => '623d92f2e509b.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:01:22',
                'updated_at' => '2022-03-25 10:16:48',
            ),
            30 => 
            array (
                'id' => 46,
                'code' => '623d92f2f23bd',
                'path_image' => '623d92f2f23bd.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:01:23',
                'updated_at' => '2022-03-25 10:16:48',
            ),
            31 => 
            array (
                'id' => 47,
                'code' => '623d95d7187e3',
                'path_image' => '623d95d7187e3.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:13:43',
                'updated_at' => '2022-03-25 10:16:27',
            ),
            32 => 
            array (
                'id' => 48,
                'code' => '623d95de8df56',
                'path_image' => '623d95de8df56.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:13:50',
                'updated_at' => '2022-03-25 10:16:27',
            ),
            33 => 
            array (
                'id' => 49,
                'code' => '623d95de9d26d',
                'path_image' => '623d95de9d26d.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:13:50',
                'updated_at' => '2022-03-25 10:16:27',
            ),
            34 => 
            array (
                'id' => 50,
                'code' => '623d95de9e35a',
                'path_image' => '623d95de9e35a.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:13:50',
                'updated_at' => '2022-03-25 10:16:27',
            ),
            35 => 
            array (
                'id' => 51,
                'code' => '623d95dea1e73',
                'path_image' => '623d95dea1e73.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:13:50',
                'updated_at' => '2022-03-25 10:16:27',
            ),
            36 => 
            array (
                'id' => 52,
                'code' => '623d95ece9efa',
                'path_image' => '623d95ece9efa.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:14:04',
                'updated_at' => '2022-03-25 10:16:08',
            ),
            37 => 
            array (
                'id' => 53,
                'code' => '623d95f21cfb6',
                'path_image' => '623d95f21cfb6.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:14:10',
                'updated_at' => '2022-03-25 10:16:08',
            ),
            38 => 
            array (
                'id' => 54,
                'code' => '623d95f21cfdf',
                'path_image' => '623d95f21cfdf.png',
                'type' => 'active',
                'created_at' => '2022-03-25 10:14:10',
                'updated_at' => '2022-03-25 10:16:08',
            ),
            39 => 
            array (
                'id' => 55,
                'code' => '623d977b736b5',
                'path_image' => '623d977b736b5.jpg',
                'type' => 'active',
                'created_at' => '2022-03-25 10:20:43',
                'updated_at' => '2022-03-25 10:21:00',
            ),
            40 => 
            array (
                'id' => 56,
                'code' => '623d979a18745',
                'path_image' => '623d979a18745.jpg',
                'type' => 'active',
                'created_at' => '2022-03-25 10:21:14',
                'updated_at' => '2022-03-25 10:21:20',
            ),
            41 => 
            array (
                'id' => 58,
                'code' => '623db7bf0dd8c',
                'path_image' => '623db7bf0dd8c.jpg',
                'type' => 'active',
                'created_at' => '2022-03-25 12:38:23',
                'updated_at' => '2022-03-25 12:39:13',
            ),
        ));
        
        
    }
}