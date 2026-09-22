<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePageSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('home_page_settings', function (Blueprint $table) {
            $table->id();
            $table->string('hero_image')->default('home-hero.png');
            $table->text('hero_heading');
            $table->string('hero_button_text')->default('Contact Us');
            $table->string('hero_button_link')->default('/contact-us');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('home_page_settings');
    }
}
