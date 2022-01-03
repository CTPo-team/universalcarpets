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
                'title' => 'OUR STORY',
                'desc' => '<p>Established since 2000 and traversing down an exciting and dynamic path with a youthful Universal, a fulfilling sense of a modest achievement permeates us.</p><p>Universal has now shaped itself to be a robust company with loyal and satisfied customers including chain stores of international repute spanning in countries from USA to Australia, Equador to Japan, South Africa to Sweden.</p><p>With more than 30 countries in our exports map, we have prominent domestic presence as well. We have successfully rooted ourselves as reputed, reliable and probably world’s largest manufacturers in our category.</p><p>From 2 to 30 countries over 15 years, is a milestone which at Universal, we cherish and work to consolidate and ever expand.</p><p>The other landmark marketing achievements have been :</p><p>Certified ISO 9001:2015 QMS since January 2004.</p><p>Winners of 2008 Primaniyarta Exports Award from Government Of Indonesia.</p><p>We are permanent exhibitors since 2003 at world’s premier floor covering show ‘DOMOTEX’ at Hannover, Germany.</p><p>In 2011 we participated at DOMOTEX-CHINAFLOOR 2011.</p>',
                'short_desc' => '<p>Established since 2000 and traversing down an exciting and dynamic path with a youthful Universal, a fulfilling sense of a modest achievement permeates us.</p><p><span style="background-color: transparent;">Universal has now shaped itself to be a robust company with loyal and satisfied customers including chain stores of international repute spanning in countries from USA to Australia, Equador to Japan, South Africa to Sweden.</span><br></p>',
                'seo_desc' => 'Established since 2000 and traversing down an exciting and dynamic path with a youthful Universal, a fulfilling sense of a modest achievement permeates us.Universal has now shaped itself to be a robust company with loyal and satisfied customers including chain stores of international repute spanning in countries from USA to Australia, Equador to Japan, South Africa to Sweden.With more than 30 countries in our exports map, we have prominent domestic presence as well. We have successfully rooted ourselves as reputed, reliable and probably world’s largest manufacturers in our category.From 2 to 30 countries over 15 years, is a milestone which at Universal, we cherish and work to consolidate and ever expand.The other landmark marketing achievements have been :Certified ISO 9001:2015 QMS since January 2004.Winners of 2008 Primaniyarta Exports Award from Government Of Indonesia.We are permanent exhibitors since 2003 at world’s premier floor covering show ‘DOMOTEX’ at Hannover, Germany.In 2011 we participated at DOMOTEX-CHINAFLOOR 2011.',
                'seo_category' => 'about_us',
                'seo_keyword' => 'OUR STORY',
                'seo_url' => 'http://localhost:8000',
                'created_at' => '2021-12-25 12:03:53',
                'updated_at' => '2021-12-25 05:06:03',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'NETWORK',
                'desc' => '<p>Universal caters to rugs and carpet requirements of all inhabited continents to more than 25 countries. A well respected, loyal and professional value chain of customers comprising of importers, distributors, wholesalers, retailers, chain stores and agents are located all over the world offering our products in their respective markets. Not only do we command a major market share in these countries it provides us a rich data for new product development to match the ever changing market tastes which is an important dynamic exercise at Universal.</p><p>Sourcing of raw materials is done from well recognized world leaders in their respective product category irrespective of their global location.</p>',
                'short_desc' => '<p>Universal caters to rugs and carpet requirements of all inhabited continents to more than 25 countries. A well respected, loyal and professional value chain of customers comprising of importers, distributors, wholesalers, retailers, chain stores and agents are located all over the world offering our products in their respective markets.<br></p>',
                'seo_desc' => 'Universal caters to rugs and carpet requirements of all inhabited continents to more than 25 countries. A well respected, loyal and professional value chain of customers comprising of importers, distributors, wholesalers, retailers, chain stores and agents are located all over the world offering our products in their respective markets. Not only do we command a major market share in these countries it provides us a rich data for new product development to match the ever changing market tastes which is an important dynamic exercise at Universal.Sourcing of raw materials is done from well recognized world leaders in their respective product category irrespective of their global location.',
                'seo_category' => 'about_us',
                'seo_keyword' => 'NETWORK',
                'seo_url' => 'http://localhost:8000',
                'created_at' => '2021-12-25 12:04:15',
                'updated_at' => '2021-12-25 05:05:25',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'TECHNOLOGIES',
                'desc' => '<p>No compromise is made with the choice of plant and machineries. Universal as a policy opts for the latest state of art West European technologies.<br></p>',
                'short_desc' => '<p>No compromise is made with the choice of plant and machineries. Universal as a policy opts for the latest state of art West European technologies.<br></p>',
                'seo_desc' => 'No compromise is made with the choice of plant and machineries. Universal as a policy opts for the latest state of art West European technologies.',
                'seo_category' => 'about_us',
                'seo_keyword' => 'TECHNOLOGIES',
                'seo_url' => 'http://localhost:8000',
                'created_at' => NULL,
                'updated_at' => '2021-12-25 05:06:23',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}