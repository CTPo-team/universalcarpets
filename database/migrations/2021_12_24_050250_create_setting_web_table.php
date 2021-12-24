<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingWebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_web', function (Blueprint $table) {
            $table->id();
            $table->string("phone")->nullable();
            $table->string("fax")->nullable();
            $table->string("email1")->nullable();
            $table->string("email2")->nullable();
            $table->string("email_contact_us")->nullable();
            $table->mediumText("instagram")->nullable();
            $table->mediumText("twitter")->nullable();
            $table->mediumText("facebook")->nullable();
            $table->mediumText("youtube")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting_web');
    }
}
