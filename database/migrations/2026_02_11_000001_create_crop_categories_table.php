<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateCropCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('crop_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('crop_id')->constrained('crops')->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->json('meta')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        // Seed sample categories for existing crops
        $categories = [
            'Variety',
            'Seed Source',
            'Good Agronomic practices',
            'Post-harvest handling',
            'Value addition',
            'on-going projects',
        ];

        $now = now();
        $crops = DB::table('crops')->get();
        foreach ($crops as $crop) {
            foreach ($categories as $name) {
                DB::table('crop_categories')->insert([
                    'crop_id' => $crop->id,
                    'name' => $name,
                    'slug' => Str::slug($crop->name . ' ' . $name),
                    'description' => null,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }
    }

    public function down()
    {
        Schema::dropIfExists('crop_categories');
    }
}
