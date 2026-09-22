<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('contact_settings', function (Blueprint $table) {
            $table->id();
            $table->text('franklin_address');
            $table->text('naperville_address');
            $table->string('phone', 40);
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_settings');
    }
};
