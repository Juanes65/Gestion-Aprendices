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
            $table->string('nombre_dor', 20);
            $table->string('camas', 3);
            $table->string('ubicacion', 20);
            $table->string('genero',20);
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
