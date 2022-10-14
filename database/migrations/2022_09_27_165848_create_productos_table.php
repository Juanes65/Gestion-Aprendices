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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto', 20);
            $table->string('unidad_medida', 20);
            $table->date('fecha_caducidad', 20);
            $table->string('marca_producto', 20);
            $table->string('clasificacion_producto', 20);
            $table->string('stock_actual', 20);
            $table->string('stock_minimo', 20);
            $table->string('lote_producto', 20);
            $table->date('fecha_llegada', 20);
            $table->unsignedBigInteger('area');

            $table->foreign('area')->references('id')->on('areas')->onDelete('cascade');
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
        Schema::dropIfExists('productos');
    }
};