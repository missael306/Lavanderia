<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecoleccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recoleccion', function (Blueprint $table) {
            $table->bigIncrements('id_recoleccion');
            $table->string('folio',150);
            $table->dateTime('fecha_recoleccion');
            $table->dateTime('fecha_entrega')->nullable();
            $table->unsignedBigInteger('id_punto_recoleccion');
            $table->foreign('id_punto_recoleccion')->references('id_punto_recoleccion')->on('puntos_recoleccion'); 
            $table->unsignedBigInteger('id_cat_tipo_recoleccion');
            $table->foreign('id_cat_tipo_recoleccion')->references('id_cat_tipo_recoleccion')->on('cat_tipo_recoleccion'); 
            $table->unsignedBigInteger('id_cat_estatus_recoleccion');
            $table->foreign('id_cat_estatus_recoleccion')->references('id_cat_estatus_recoleccion')->on('cat_estatus_recoleccion'); 
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
        Schema::dropIfExists('recoleccion');
    }
}
