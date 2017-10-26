<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->enum('estado',['VENTA','ALQUILER']);
            $table->integer('idcategoria');
            $table->integer('idubigeo');
            $table->string('titulo');
            $table->string('imagen1');
            $table->string('imagen2');
            $table->string('imagen3');
            $table->string('imagen4');
            $table->decimal('area',10,2);
            $table->boolean('amoblado');
            $table->decimal('frente',10,2);
            $table->decimal('fondo',10,2);
            $table->decimal('area_terreno',10,2);
            $table->decimal('area_construida',10,2);
            $table->integer('banos');
            $table->integer('antiguedad');
            $table->string('zonificacion');
            $table->integer('garaje');
            $table->integer('ambientes');
            $table->boolean('jardin');
            $table->boolean('patio');
            $table->boolean('tv_cable');
            $table->boolean('comedor');
            $table->boolean('baño_dormitorio');
            $table->boolean('biblioteca');
            $table->boolean('lavanderia');
            $table->boolean('linea_telefonica');
            $table->boolean('sala');
            $table->text('descripcion');
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
        Schema::dropIfExists('propiedades');
    }
}
