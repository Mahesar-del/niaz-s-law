<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up(){Schema::create('static_pages',function(Blueprint $t){$t->id();$t->string('title');$t->string('slug')->unique();$t->longText('content')->nullable();$t->string('status')->default('published');$t->timestamps();});} public function down(){Schema::dropIfExists('static_pages');} };
