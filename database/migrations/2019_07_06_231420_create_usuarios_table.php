<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
            $table->string('nombre',50);
            $table->string('apellidos',100);            
            $table->string('telefono',20);
            $table->string('correoElectronico',100);
            $table->string('contrasena',50); 
            $table->integer('puntos');                
            $table->unsignedBigInteger('idCatRol')->default(1);
            $table->foreign('idCatRol')->references('idCatRol')->on('cat_rol');
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
        Schema::dropIfExists('usuarios');
    }
}
