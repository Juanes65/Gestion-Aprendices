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
        Schema::create('cupo_deletes', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_ingreso');
            $table->date('fecha_salida');
            $table->unsignedBigInteger('fk_dormitorios');
            $table->unsignedBigInteger('fk_estudiantes');

            $table->foreign('fk_dormitorios')->references('id')->on('dormitorios')->onDelete('cascade');
            $table->foreign('fk_estudiantes')->references('id')->on('aprendices')->onDelete('cascade');
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
        Schema::dropIfExists('cupo_deletes');
    }
};
