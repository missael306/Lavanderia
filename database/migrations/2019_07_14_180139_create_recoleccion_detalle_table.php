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
            $table->bigIncrements('id_recoleccion_detalle');
            $table->float('precio');            
            $table->unsignedBigInteger('id_recoleccion');
            $table->foreign('id_recoleccion')->references('id_recoleccion')->on('recoleccion'); 
            $table->unsignedBigInteger('id_cat_articulo');
            $table->foreign('id_cat_articulo')->references('id_cat_articulo')->on('cat_articulos'); 
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
