<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(AboutUsPageTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(SettingWebTableSeeder::class);
        $this->call(BlogCategoryTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(ProductCategoryTableSeeder::class);
        $this->call(ProductBrandTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ContactUsPageTableSeeder::class);
        $this->call(GalleryTableSeeder::class);
        $this->call(BannerAboutUsTableSeeder::class);
        $this->call(BannerBlogTableSeeder::class);
        $this->call(BannerContactUsTableSeeder::class);
        $this->call(BannerHomepageTableSeeder::class);
        $this->call(BannerProductTableSeeder::class);
    }
}
