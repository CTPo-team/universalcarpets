<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerHomepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_homepage', function (Blueprint $table) {
            $table->id();
            $table->longText("path_image");
            $table->string("title")->nullable();
            $table->string("category")->nullable();
            $table->string("button_title")->nullable();
            $table->string("button_url")->nullable();
            $table->boolean("status");
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
        Schema::dropIfExists('banner_homepage');
    }
}
