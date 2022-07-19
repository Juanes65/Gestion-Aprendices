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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->string('desayuno', 50);
            $table->string('almuerzo', 50);
            $table->string('cena', 50);
            $table->date('fecha');
            $table->unsignedBigInteger('comida_aprendiz');
            $table->unsignedBigInteger('novedad_aprendiz');

            $table->foreign('comida_aprendiz')->references('id')->on('aprendices')->onDelete('cascade');
            $table->foreign('novedad_aprendiz')->references('id')->on('novedades')->onDelete('cascade');
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
        Schema::dropIfExists('reportes');
    }
};
