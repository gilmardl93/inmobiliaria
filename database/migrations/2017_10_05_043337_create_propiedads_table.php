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
            $table->string('codigo', 10);
            $table->string('slug');
            $table->enum('estado',['VENTA','ALQUILER']);
            $table->string('tipo');
            $table->string('ubigeo');
            $table->string('titulo');
            $table->decimal('precio',10,2);
            $table->string('imagen1');
            $table->string('imagen2')->nullable();
            $table->string('imagen3')->nullable();
            $table->string('imagen4')->nullable();
            $table->string('area',10,2);
            $table->string('frente',10,2)->nullable();
            $table->string('fondo',10,2)->nullable();
            $table->string('area_terreno',10,2)->nullable();
            $table->string('area_construida',10,2)->nullable();
            $table->string('antiguedad')->default(0);
            $table->string('zonificacion')->nullable();
            $table->string('vista')->nullable();
            $table->string('bano_completo')->nullable();
            $table->string('medio_bano')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('garaje')->default(0);
            $table->integer('ambientes')->default(0);
            $table->integer('dormitorios')->nullable();
            $table->integer('banos')->default(0);
            $table->boolean('jardin')->nullable();
            $table->boolean('patio')->nullable();
            $table->boolean('tv_cable')->nullable();
            $table->boolean('comedor')->nullable();
            $table->boolean('bano_dormitorio')->nullable();
            $table->boolean('biblioteca')->nullable();
            $table->boolean('lavanderia')->nullable();
            $table->boolean('linea_telefonica')->nullable();
            $table->boolean('sala')->nullable();
            $table->boolean('amoblado')->nullable();
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
