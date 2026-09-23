<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
 public function up(){Schema::table('capabilities',function(Blueprint $table){$table->string('page_title')->nullable()->after('slug');$table->text('page_description')->nullable()->after('description');});}
 public function down(){Schema::table('capabilities',function(Blueprint $table){$table->dropColumn(['page_title','page_description']);});}
};
