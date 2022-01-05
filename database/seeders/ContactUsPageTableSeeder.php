<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactUsPageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_us_page')->delete();
        
        \DB::table('contact_us_page')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Marketing Office',
                'desc' => '<p>Jl. Raya Gaya Motor No. 15 Sunter II, Jakarta Utara – 14330, Indonesia</p><p>+62-21-6583-4789</p><p>ucrugs@universalcarpets.com</p><p>yjohar@universalcarpets.com</p>',
                'embed_maps_link' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.966398651797!2d106.88466601535104!3d-6.1352171537079565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f56022f2c657%3A0xb2f4020b81cfb4a5!2sJl.%20Gaya%20Motor%20Raya%2C%20Sungai%20Bambu%2C%20Tj.%20Priok%2C%20Kota%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2014330!5e0!3m2!1sid!2sid!4v1641289985202!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'created_at' => '2022-01-04 09:54:17',
                'updated_at' => '2022-01-04 09:54:17',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Production Unit I',
                'desc' => '<p>Jl. Raya Gunung Putri No. 285 B, Desa Tlajung Udik Kecamatan Gunung Putri, Bogor – 16962, Jawa Barat – Indonesia</p><p>+62-21-867-1108</p><p>+62-21-867-7037</p><p>+62-21-867-7777</p><p>+62-21-867-4003</p><p>+62-21-867-4293</p>',
                'embed_maps_link' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4714.577987412519!2d106.89200220751104!3d-6.461763153987424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eaa712839227%3A0xcc228339f9b1957e!2sJl.%20Raya%20Gn.%20Putri%2C%20Kec.%20Gn.%20Putri%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1641290203098!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'created_at' => '2022-01-04 09:56:53',
                'updated_at' => '2022-01-04 09:56:53',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Production Unit II',
                'desc' => '<p>Kawasan Industri Wahyu Sejahtera Blok D1 &amp; D3, Desa Kembang Kuning, Kec. Klapanunggal, Bogor 16820, Jawa Barat – Indonesia</p><p>+62-21-824-88888</p><p>+62-21-824-95111</p>',
                'embed_maps_link' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7929.1934095219385!2d106.94364202784136!3d-6.445796188550048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699567c25eb21d%3A0xd44e4af73de4868e!2sKembang%20Kuning%2C%20Kec.%20Klapanunggal%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1641290463044!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
                'created_at' => '2022-01-04 10:01:16',
                'updated_at' => '2022-01-04 10:01:16',
            ),
        ));
        
        
    }
}