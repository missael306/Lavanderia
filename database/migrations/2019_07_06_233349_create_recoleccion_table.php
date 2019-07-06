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
            $table->bigIncrements('idRecoleccion');
            $table->string('folio',150);
            $table->dateTime('fechaRecoleccion');
            $table->dateTime('fechaEntrega')->nullable();
            $table->unsignedBigInteger('idPuntoRecoleccion');
            $table->foreign('idPuntoRecoleccion')->references('idPuntoRecoleccion')->on('puntos_recoleccion'); 
            $table->unsignedBigInteger('idCatTipoRecoleccion');
            $table->foreign('idCatTipoRecoleccion')->references('idCatTipoRecoleccion')->on('cat_tipo_recoleccion'); 
            $table->unsignedBigInteger('idCatEstatusRecoleccion');
            $table->foreign('idCatEstatusRecoleccion')->references('idCatEstatusRecoleccion')->on('cat_estatus_recoleccion'); 
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
