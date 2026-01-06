<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('livestock_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('livestock_variety_id')->constrained('livestock_varieties')->onDelete('cascade');
            $table->string('title');
            $table->text('content')->nullable();
            $table->json('attributes')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('livestock_details');
    }
};
