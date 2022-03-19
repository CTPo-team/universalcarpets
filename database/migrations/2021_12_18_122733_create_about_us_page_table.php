<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_page', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->longText("desc")->nullable();
            $table->mediumText("short_desc")->nullable();
            $table->mediumText("our_strategy_desc")->nullable();
            $table->longText("path_image")->nullable();
            //SEO
            $table->longText("seo_desc")->nullable();
            $table->mediumText("seo_category")->nullable();
            $table->longText("seo_keyword")->nullable();
            $table->mediumText("seo_url")->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us_page');
    }
}
