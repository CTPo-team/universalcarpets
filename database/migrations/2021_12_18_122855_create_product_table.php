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
            $table->string("title");
            $table->longText("path_image")->nullable();
            $table->longText("desc")->nullable();
            $table->boolean("status");

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
