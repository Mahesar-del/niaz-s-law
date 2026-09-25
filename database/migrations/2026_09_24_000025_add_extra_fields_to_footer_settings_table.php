<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('footer_settings', function (Blueprint $t) {
            $t->text('about_text')->nullable();
            $t->string('copyright_text')->nullable();
            $t->string('facebook_url')->nullable();
            $t->string('linkedin_url')->nullable();
            $t->string('twitter_url')->nullable();
            $t->string('instagram_url')->nullable();
        });
    }
    public function down() {
        Schema::table('footer_settings', function (Blueprint $t) {
            $t->dropColumn(['about_text','copyright_text','facebook_url','linkedin_url','twitter_url','instagram_url']);
        });
    }
};
