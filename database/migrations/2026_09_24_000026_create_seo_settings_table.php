<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('seo_settings', function (Blueprint $t) {
            $t->id();
            $t->string('page')->unique(); // e.g. 'home', 'about', 'attorneys'
            $t->string('meta_title')->nullable();
            $t->text('meta_description')->nullable();
            $t->text('meta_keywords')->nullable();
            $t->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('seo_settings');
    }
};
