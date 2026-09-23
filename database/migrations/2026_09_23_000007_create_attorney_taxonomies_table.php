<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('attorney_taxonomies', function (Blueprint $table) {
            $table->id();
            $table->string('type', 20);
            $table->string('name', 120);
            $table->timestamps();
            $table->unique(['type', 'name']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('attorney_taxonomies');
    }
};
