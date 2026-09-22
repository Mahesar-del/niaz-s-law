<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hero_slides', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('position')->unique();
            $table->string('image');
            $table->text('heading');
            $table->string('button_text', 60);
            $table->string('button_link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hero_slides');
    }
};
