<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(){Schema::create('attorneys',function(Blueprint $table){$table->id();$table->string('photo')->nullable();$table->string('name');$table->string('practice');$table->string('industry');$table->string('location');$table->string('title');$table->string('email');$table->string('phone',40);$table->timestamps();});}
    public function down(){Schema::dropIfExists('attorneys');}
};
