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
            $table->bigIncrements('idPuntoRecoleccion');
            $table->string('calle',50);
            $table->string('codigoPostal',50);
            $table->string('numeroExterior',50);
            $table->string('numeroInterior',50)->nullable();
            $table->string('referencia',250);
            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios');           
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
