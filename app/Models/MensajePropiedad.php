<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MensajePropiedad extends Model
{
	use SoftDeletes;

    protected $table 	= 'mensaje_propiedades';
    protected $fillable = ['idpropiedad', 'datos', 'celular', 'email', 'asunto', 'mensaje', 'fecha_enviado', 'fecha_visto', 'estado'];

    public function propiedad()
    {
    	return $this->belongsTo(Propiedad::class, 'idpropiedad', 'id');
    }

}
