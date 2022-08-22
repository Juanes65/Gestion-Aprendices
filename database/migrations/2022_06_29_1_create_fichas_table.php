<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('ficha', 15);
            $table->string('origen', 50);
            $table->string('tutor', 50);
            $table->string('carrera', 150);
            $table->string('estudiante_m', 150)->nullable();
            $table->string('estudiante_h', 150)->nullable();
            $table->date('fecha_i');
            $table->date('fecha_s');
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
        Schema::dropIfExists('fichas');
    }
};
