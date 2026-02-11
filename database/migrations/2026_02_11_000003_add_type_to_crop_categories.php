<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Adds a `type` column to `crop_categories` to explicitly indicate
     * whether a category is a `variety` or `detail` (default: `detail`).
     * Also performs a simple backfill based on the name containing "variety".
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crop_categories', function (Blueprint $table) {
            $table->string('type')->default('detail')->after('name');
        });

        // Backfill existing rows: if the name contains 'variety' mark as variety.
        \DB::table('crop_categories')
            ->whereRaw("LOWER(name) LIKE '%variety%'")
            ->update(['type' => 'variety']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crop_categories', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
