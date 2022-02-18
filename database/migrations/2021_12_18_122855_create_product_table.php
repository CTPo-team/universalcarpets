<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_category_id')->constrained('product_category')->restrictOnDelete();
            $table->foreignId('product_brand_id')->constrained('product_brand')->restrictOnDelete();
            $table->string("title");
            $table->text("slug")->unique()->nullable();
            $table->longText("desc")->nullable();
            $table->boolean("status");
            $table->boolean("featured")->default(0);
            $table->longText("path_image_thumbnail")->nullable();

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
        Schema::dropIfExists('product');
    }
}
