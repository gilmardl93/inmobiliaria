<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajeContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensaje_contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('datos');
            $table->string('email');
            $table->string('celular');
            $table->string('asunto');
            $table->longText('mensaje');
            $table->dateTime('fecha_enviado');
            $table->dateTime('fecha_visto')->nullable();
            $table->boolean('estado')->default(true);
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
        Schema::dropIfExists('mensaje_contactos');
    }
}
