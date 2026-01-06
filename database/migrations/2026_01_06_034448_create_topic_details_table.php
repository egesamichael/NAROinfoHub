<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_topic_id')->constrained('sub_topics')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->json('attributes')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topic_details');
    }
}
