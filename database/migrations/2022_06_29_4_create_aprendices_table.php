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
        Schema::create('aprendices', function (Blueprint $table) {
            $table->id();
            $table->string('cc',15)->unique();
            $table->string('nombre', 30);
            $table->string('apellido', 30);
            $table->string('edad', 3);
            $table->string('genero', 11);
            $table->string('desayuno', 3)->nullable();
            $table->string('almuerzo', 3)->nullable();
            $table->string('cena', 3)->nullable();
            $table->string('observaciones', 120);
            $table->string('estado', 20);
            $table->date('fecha_inicial');
            $table->date('fecha_final');
            $table->string('habitacion', 4)->nulleable();
            $table->unsignedBigInteger('aprendiz_ficha');

            $table->foreign('aprendiz_ficha')->references('id')->on('fichas')->onDelete('cascade');
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
        Schema::dropIfExists('aprendices');
    }
};
