<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutUsPageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('about_us_page')->delete();
        
        \DB::table('about_us_page')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => NULL,
                'desc' => NULL,
                'short_desc' => NULL,
                'seo_desc' => NULL,
                'seo_category' => NULL,
                'seo_keyword' => NULL,
                'seo_url' => NULL,
                'created_at' => '2021-12-21 01:53:25',
                'updated_at' => '2021-12-22 10:49:12',
                'deleted_at' => '2021-12-22 10:49:12',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'About Us',
                'desc' => '<p>test</p>',
                'short_desc' => '<p>test</p>',
                'seo_desc' => 'test',
                'seo_category' => 'about_us',
                'seo_keyword' => 'About Us',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-22 10:48:01',
                'updated_at' => '2021-12-22 10:49:14',
                'deleted_at' => '2021-12-22 10:49:14',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'About',
            'desc' => '<p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; border: none; outline: 0px; font-size: 16px; font-family: Merriweather; vertical-align: baseline; text-align: justify; line-height: 24px; color: rgb(60, 39, 20);"><span style="font-family: Arial;">Established since 2000 and traversing down an exciting and dynamic path with a youthful Universal, a fulfilling sense of a modest achievement permeates us.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; border: none; outline: 0px; font-size: 16px; font-family: Merriweather; vertical-align: baseline; text-align: justify; line-height: 24px; color: rgb(60, 39, 20);"><span style="font-family: Arial;">Universal has now shaped itself to be a robust company with loyal and satisfied customers including chain stores of international repute spanning in countries from USA to Australia, Equador to Japan, South Africa to Sweden.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; border: none; outline: 0px; font-size: 16px; font-family: Merriweather; vertical-align: baseline; text-align: justify; line-height: 24px; color: rgb(60, 39, 20);"><span style="font-family: Arial;">With more than 30 countries in our exports map, we have prominent domestic presence as well. We have successfully rooted ourselves as reputed, reliable and probably world’s largest manufacturers in our category.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; border: none; outline: 0px; font-size: 16px; font-family: Merriweather; vertical-align: baseline; text-align: justify; line-height: 24px; color: rgb(60, 39, 20);"><span style="font-family: Arial;">From 2 to 30 countries over 15 years, is a milestone which at Universal, we cherish and work to consolidate and ever expand.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; border: none; outline: 0px; font-size: 16px; font-family: Merriweather; vertical-align: baseline; text-align: justify; line-height: 24px; color: rgb(60, 39, 20);"><strong style="margin: 0px; padding: 0px; border: none; outline: 0px; font-weight: bold; font-style: inherit; font-family: inherit; vertical-align: baseline;"><span style="font-family: Arial;">The other landmark marketing achievements have been :</span></strong></p><ul style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 0px 25px; border: none; outline: 0px; font-size: 16px; font-family: Merriweather; vertical-align: baseline; color: rgb(60, 39, 20); text-align: justify;"><li style="margin: 0px; padding: 0px; border: none; outline: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; line-height: 1.5; text-align: justify;"><span style="font-family: Arial;">Certified ISO 9001:2015 QMS since January 2004.</span></li><li style="margin: 0px; padding: 0px; border: none; outline: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; line-height: 1.5; text-align: justify;"><span style="font-family: Arial;">Winners of 2008 Primaniyarta Exports Award from Government Of Indonesia.</span></li><li style="margin: 0px; padding: 0px; border: none; outline: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; line-height: 1.5; text-align: justify;"><span style="font-family: Arial;">We are permanent exhibitors since 2003 at world’s premier floor covering show ‘DOMOTEX’ at Hannover, Germany.</span></li><li style="margin: 0px; padding: 0px; border: none; outline: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; line-height: 1.5; text-align: justify;"><span style="font-family: Arial;">In 2011 we participated at DOMOTEX-CHINAFLOOR 2011</span></li></ul>',
            'short_desc' => '<p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 24px; padding: 0px 0px 10px; border: none; outline: 0px; font-size: 16px; font-family: Merriweather; vertical-align: baseline; text-align: justify; color: rgb(60, 39, 20);"><span style="font-family: Arial;">Established since 2000 and traversing down an exciting and dynamic path with a youthful Universal, a fulfilling sense of a modest achievement permeates us.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 24px; padding: 0px 0px 10px; border: none; outline: 0px; font-size: 16px; font-family: Merriweather; vertical-align: baseline; text-align: justify; color: rgb(60, 39, 20);"><span style="font-family: Arial;">Universal has now shaped itself to be a robust company with loyal and satisfied customers including chain stores of international repute spanning in countries from USA to Australia, Equador to Japan, South Africa to Sweden.</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 24px; padding: 0px 0px 10px; border: none; outline: 0px; font-size: 16px; font-family: Merriweather; vertical-align: baseline; text-align: justify; color: rgb(60, 39, 20);"><span style="font-family: Arial;">With more than 30 countries in our exports map, we have prominent domestic presence as well. We have successfully rooted ourselves as reputed, reliable and probably world’s largest manufacturers in our category.</span></p>',
                'seo_desc' => '123',
                'seo_category' => 'about_us',
                'seo_keyword' => 'about us',
                'seo_url' => 'http://127.0.0.1:8000',
                'created_at' => '2021-12-22 10:49:24',
                'updated_at' => '2021-12-22 10:50:57',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}