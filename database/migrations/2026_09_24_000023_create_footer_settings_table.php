<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up(){Schema::create('footer_settings',function(Blueprint $t){$t->id();$t->json('capability_ids')->nullable();$t->json('page_links')->nullable();$t->json('footer_links')->nullable();$t->timestamps();});} public function down(){Schema::dropIfExists('footer_settings');} };
