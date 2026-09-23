<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up(){Schema::table('blog_posts',function(Blueprint $t){$t->string('content_type')->default('blog')->after('slug');});} public function down(){Schema::table('blog_posts',function(Blueprint $t){$t->dropColumn('content_type');});}};
