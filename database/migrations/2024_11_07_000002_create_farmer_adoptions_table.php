<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerAdoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_adoptions', function (Blueprint $table) {
            $table->id();
            $table->date('adoption_date');
            $table->string('farmer_name');
            $table->string('district');
            $table->integer('herd_size');
            $table->integer('vaccinated');
            $table->decimal('cost', 10, 2);
            $table->decimal('tick_reduction', 5, 2);
            $table->decimal('productivity_increase', 5, 2);
            $table->string('satisfaction');
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
        Schema::dropIfExists('farmer_adoptions');
    }
}
