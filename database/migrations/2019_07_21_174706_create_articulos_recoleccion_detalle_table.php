<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosRecoleccionDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos_recoleccion_detalle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idCatArticulo');
            $table->foreign('idCatArticulo')->references('idCatArticulo')->on('cat_articulos'); 
            $table->unsignedBigInteger('idRecoleccionDetalle');
            $table->foreign('idRecoleccionDetalle')->references('idRecoleccionDetalle')->on('recoleccion_detalle'); 
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
        Schema::dropIfExists('articulos_recoleccion_detalle');
    }
}
