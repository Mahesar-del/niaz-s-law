<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSeoFieldsToSubpagesTables extends Migration
{
    public function up()
    {
        $tables = ['attorneys', 'capabilities', 'static_pages'];

        foreach ($tables as $t) {
            Schema::table($t, function (Blueprint $table) {
                $table->string('meta_title')->nullable();
                $table->text('meta_description')->nullable();
                $table->text('meta_keywords')->nullable();
                $table->string('robots')->nullable();
            });
        }
    }

    public function down()
    {
        $tables = ['attorneys', 'capabilities', 'static_pages'];

        foreach ($tables as $t) {
            Schema::table($t, function (Blueprint $table) {
                $table->dropColumn(['meta_title', 'meta_description', 'meta_keywords', 'robots']);
            });
        }
    }
}
