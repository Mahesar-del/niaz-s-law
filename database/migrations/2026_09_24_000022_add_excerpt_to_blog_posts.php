<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if (Schema::hasTable('blog_posts') && !Schema::hasColumn('blog_posts', 'excerpt')) {
            Schema::table('blog_posts', function (Blueprint $t) {
                $t->text('excerpt')->nullable()->after('featured_image');
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('blog_posts') && Schema::hasColumn('blog_posts', 'excerpt')) {
            Schema::table('blog_posts', function (Blueprint $t) {
                $t->dropColumn('excerpt');
            });
        }
    }
};
