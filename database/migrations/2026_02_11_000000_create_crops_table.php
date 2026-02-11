<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateCropsTable extends Migration
{
    public function up()
    {
        Schema::create('crops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->json('meta')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        // Insert sample crops
        $now = now();
        DB::table('crops')->insert([
            ['name' => 'Cassava', 'slug' => Str::slug('Cassava'), 'description' => 'Cassava crop', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Beans', 'slug' => Str::slug('Beans'), 'description' => 'Bean crop', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Maize', 'slug' => Str::slug('Maize'), 'description' => 'Maize crop', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('crops');
    }
}
