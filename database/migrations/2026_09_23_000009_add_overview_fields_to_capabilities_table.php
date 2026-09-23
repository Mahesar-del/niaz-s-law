<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
 public function up(){Schema::table('capabilities',function(Blueprint $table){$table->string('overview_heading')->nullable();$table->string('overview_image_left')->nullable();$table->string('overview_image_right')->nullable();$table->text('overview_paragraph_one')->nullable();$table->text('overview_paragraph_two')->nullable();});}
 public function down(){Schema::table('capabilities',function(Blueprint $table){$table->dropColumn(['overview_heading','overview_image_left','overview_image_right','overview_paragraph_one','overview_paragraph_two']);});}
};
