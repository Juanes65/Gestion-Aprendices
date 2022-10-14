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
            $table->string('ingre_1', 50);
            $table->string('ingre_2', 50);
            $table->string('ingre_3', 50);
            $table->string('ingre_4', 50);
            $table->string('ingre_5', 50);

            
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
