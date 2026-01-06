<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('topics', function (Blueprint $table) {
            if (Schema::hasColumn('topics', 'order')) {
                $table->dropColumn('order');
            }
        });

        Schema::table('sub_topics', function (Blueprint $table) {
            if (Schema::hasColumn('sub_topics', 'order')) {
                $table->dropColumn('order');
            }
        });
    }

    public function down()
    {
        Schema::table('topics', function (Blueprint $table) {
            $table->integer('order')->default(0)->after('status');
        });

        Schema::table('sub_topics', function (Blueprint $table) {
            $table->integer('order')->default(0)->after('status');
        });
    }
};
