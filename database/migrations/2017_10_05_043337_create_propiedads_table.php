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
            $table->string('imagen2')->nullable();
            $table->string('imagen3')->nullable();
            $table->string('imagen4')->nullable();
            $table->string('zonificacion')->nullable();
            $table->text('descripcion')->nullable();
            $table->decimal('precio',10,2)->nullable();
            $table->decimal('area',10,2)->nullable();
            $table->decimal('frente',10,2)->nullable();
            $table->decimal('fondo',10,2)->nullable();
            $table->decimal('area_terreno',10,2)->nullable();
            $table->decimal('area_construida',10,2)->nullable();
            $table->integer('bano')->nullable();
            $table->integer('antiguedad')->nullable();
            $table->integer('garaje')->nullable();
            $table->integer('ambientes')->nullable();
            $table->boolean('jardin')->nullable();
            $table->boolean('patio')->nullable();
            $table->boolean('tv_cable')->nullable();
            $table->boolean('comedor')->nullable();
            $table->boolean('sala')->nullable();
            $table->boolean('bano_dormitorio')->nullable();
            $table->boolean('biblioteca')->nullable();
            $table->boolean('lavanderia')->nullable();
            $table->boolean('linea_telefonica')->nullable();
            $table->boolean('amoblado')->nullable();
            $table->dateTime('fecha')->nullable();
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
