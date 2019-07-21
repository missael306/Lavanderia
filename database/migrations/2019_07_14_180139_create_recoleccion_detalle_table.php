<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecoleccionDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recoleccion_detalle', function (Blueprint $table) {
            $table->bigIncrements('idRecoleccionDetalle');
            $table->float('precio');            
            $table->unsignedBigInteger('idRecoleccion');
            $table->foreign('idRecoleccion')->references('idRecoleccion')->on('recoleccion'); 
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
        Schema::dropIfExists('recoleccion_detalle');
    }
}
