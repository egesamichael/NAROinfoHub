<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commodity_category_id')->constrained('commodity_categories')->onDelete('cascade');
            $table->foreignId('commodity_variety_id')->nullable()->constrained('commodity_varieties')->onDelete('set null');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commodities');
    }
};
