<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateCropItemsTable extends Migration
{
    public function up()
    {
        Schema::create('crop_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('crop_category_id')->constrained('crop_categories')->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('content')->nullable();
            $table->integer('order')->default(0);
            $table->json('meta')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        // Seed some example items (varieties and details) for existing categories
        $now = now();
        $categories = DB::table('crop_categories')->get();
        foreach ($categories as $cat) {
            $nameLower = strtolower($cat->name);
            if (strpos($nameLower, 'variety') !== false) {
                DB::table('crop_items')->insert([
                    ['crop_category_id' => $cat->id, 'title' => 'Local variety', 'slug' => Str::slug($cat->name . ' local'), 'content' => 'Local variety description', 'created_at' => $now, 'updated_at' => $now],
                    ['crop_category_id' => $cat->id, 'title' => 'Improved variety', 'slug' => Str::slug($cat->name . ' improved'), 'content' => 'Improved variety description', 'created_at' => $now, 'updated_at' => $now],
                ]);
            } else {
                DB::table('crop_items')->insert([
                    ['crop_category_id' => $cat->id, 'title' => $cat->name . ' overview', 'slug' => Str::slug($cat->name . ' overview'), 'content' => $cat->name . ' content and details.', 'created_at' => $now, 'updated_at' => $now],
                ]);
            }
        }
    }

    public function down()
    {
        Schema::dropIfExists('crop_items');
    }
}
