<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntosRecoleccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos_recoleccion', function (Blueprint $table) {
            $table->bigIncrements('id_punto_recoleccion');
            $table->string('calle',50);
            $table->string('codigo_postal',50);
            $table->string('numero_exterior',50);
            $table->string('numero_interior',50)->nullable();
            $table->string('referencia',250);
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users'); 
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
        Schema::dropIfExists('puntos_recoleccion');
    }
}
