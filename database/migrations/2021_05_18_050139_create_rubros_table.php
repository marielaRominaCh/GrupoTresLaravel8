<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     // Metodo up ejecuta migraciones y/o cambios pendientes
    public function up()
    {
        Schema::create('rubros', function (Blueprint $table) {
           
            $table->increments('idRubro');
            $table->string('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     //Metodo down revierte la migracion realizada por el metodo up
    public function down()
    {
        Schema::dropIfExists('rubros');
    }
}
