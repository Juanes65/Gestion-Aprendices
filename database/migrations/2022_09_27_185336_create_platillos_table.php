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
        Schema::create('platillos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_platillo', 50);
            $table->string('cantidad_1', 50)->nullable();
            $table->string('cantidad_2', 50)->nullable();
            $table->string('cantidad_3', 50)->nullable();
            $table->string('cantidad_4', 50)->nullable();
            $table->string('cantidad_5', 50)->nullable();
            $table->string('ingre_1', 50)->nullable();
            $table->string('ingre_2', 50)->nullable();
            $table->string('ingre_3', 50)->nullable();
            $table->string('ingre_4', 50)->nullable();
            $table->string('ingre_5', 50)->nullable();
            $table->string('unidad_1', 50)->nullable();
            $table->string('unidad_2', 50)->nullable();
            $table->string('unidad_3', 50)->nullable();
            $table->string('unidad_4', 50)->nullable();
            $table->string('unidad_5', 50)->nullable();


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
        Schema::dropIfExists('platillos');
    }
};
