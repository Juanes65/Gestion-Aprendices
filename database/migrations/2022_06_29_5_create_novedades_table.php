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
        Schema::create('novedades', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_novedad');
            $table->string('descripcion_P');
            $table->date('fecha_Info');
            $table->string('desayuno');
            $table->string('almuerzo');
            $table->string('cena');
            $table->unsignedBigInteger('aprendiz');

            $table->foreign('aprendiz')->references('id')->on('aprendices')->onDelete('cascade');
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
        Schema::dropIfExists('novedades');
    }
};
