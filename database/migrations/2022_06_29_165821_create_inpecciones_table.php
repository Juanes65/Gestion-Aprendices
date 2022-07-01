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
        Schema::create('inpecciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido', 15);
            $table->string('cargo', 45);
            $table->string('tipo');
            $table->longtext('descripcion');
            $table->string('area');
            $table->string('foto')->nullable();
            $table->date('fecha');
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
        Schema::dropIfExists('inpecciones');
    }
};
