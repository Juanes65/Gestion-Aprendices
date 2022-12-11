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
        Schema::create('dormitorios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_dor', 80);
            $table->string('camas', 3);
            $table->string('disponible', 3)->nullable();
            $table->string('ubicacion', 80);
            $table->string('genero',20);
            $table->string('espacio',20);
            $table->string('estado',20);
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
        Schema::dropIfExists('dormitorios');
    }
};
