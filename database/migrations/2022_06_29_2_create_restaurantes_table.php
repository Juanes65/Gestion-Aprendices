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
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->string('total_desayunos', 50)->nullable();
            $table->string('total_almuerzos', 50)->nullable();
            $table->string('total_cenas', 50)->nullable();
            $table->unsignedBigInteger('ficha_restaurante');

            $table->foreign('ficha_restaurante')->references('id')->on('fichas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**153416
     * 165755
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurantes');
    }
};
