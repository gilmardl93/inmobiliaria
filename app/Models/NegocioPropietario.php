<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NegocioPropietario extends Model
{
	use SoftDeletes;
	
    protected $table 	= 'negocio_propietarios';
    protected $fillable = ['datos', 'email', 'celular', 'tipo', 'descripcion', 'archivo', 'fecha_enviado'];
}
