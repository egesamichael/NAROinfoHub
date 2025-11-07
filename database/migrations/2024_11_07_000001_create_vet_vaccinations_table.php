<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVetVaccinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vet_vaccinations', function (Blueprint $table) {
            $table->id();
            $table->date('vaccination_date');
            $table->string('vet_name');
            $table->string('district');
            $table->integer('total_animals');
            $table->integer('cattle');
            $table->integer('goats');
            $table->integer('sheep');
            $table->decimal('efficacy_rate', 5, 2);
            $table->integer('adverse_reactions')->default(0);
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
        Schema::dropIfExists('vet_vaccinations');
    }
}
