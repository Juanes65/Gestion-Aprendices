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
            $table->string('cc',15);
            $table->string('nombre', 30);
            $table->string('apellido', 30);
            $table->string('edad', 3);
            $table->string('genero', 11);
            $table->string('desayuno', 3);
            $table->string('almuerzo', 3);
            $table->string('cena', 3);
            $table->string('observaciones', 120);
            $table->date('fecha:ingreso');
            $table->date('fecha_salida');
            $table->unsignedBigInteger('aprendiz_fiha');

            $table->foreign('aprendiz_fiha')->references('id')->on('fichas')->onDelete('cascade');
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
