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
        Schema::create('platillo_solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('total', 20)->nullable();
            $table->string('total2', 20)->nullable();
            $table->string('total3', 20)->nullable();
            $table->string('total4', 20)->nullable();
            $table->string('total5', 20)->nullable();
            $table->unsignedBigInteger('platillo');
            $table->unsignedBigInteger('solicitud');

            $table->foreign('platillo')->references('id')->on('platillos')->onDelete('cascade');
            $table->foreign('solicitud')->references('id')->on('solicitudes')->onDelete('cascade');
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
        Schema::dropIfExists('platillo_solicitudes');
    }
};
