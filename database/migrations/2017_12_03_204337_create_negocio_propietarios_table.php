<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNegocioPropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negocio_propietarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('datos');
            $table->string('email');
            $table->string('celular');
            $table->string('tipo');
            $table->longText('descripcion');
            $table->longText('archivo');
            $table->dateTime('fecha_enviado');
            $table->softDeletes();
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
        Schema::dropIfExists('negocio_propietarios');
    }
}
