<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(){
        Schema::table('capabilities', function(Blueprint $table){
            $table->string('slug')->nullable()->unique()->after('title');
            $table->string('hero_image')->nullable()->after('image');
            $table->text('experience')->nullable();
            $table->text('representative_matters')->nullable();
        });
        Schema::create('attorney_capability', function(Blueprint $table){
            $table->foreignId('attorney_id')->constrained()->cascadeOnDelete();
            $table->foreignId('capability_id')->constrained()->cascadeOnDelete();
            $table->primary(['attorney_id','capability_id']);
        });
    }
    public function down(){
        Schema::dropIfExists('attorney_capability');
        Schema::table('capabilities', function(Blueprint $table){$table->dropColumn(['slug','hero_image','experience','representative_matters']);});
    }
};
