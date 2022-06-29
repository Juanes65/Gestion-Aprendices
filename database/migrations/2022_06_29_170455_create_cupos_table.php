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
        Schema::create('cupos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('total_cupos_h');
            $table->unsignedBigInteger('total_habitaciones_h');

            $table->foreign('total_cupos_h')->references('id')->on('fichas')->onDelete('cascade');
            $table->foreign('total_habitaciones_h')->references('id')->on('dormitorios')->onDelete('cascade');
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
        Schema::dropIfExists('cupos');
    }
};
