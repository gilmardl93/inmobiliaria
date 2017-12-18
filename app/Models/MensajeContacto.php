<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MensajeContacto extends Model
{
	use SoftDeletes;

    protected $table 	= 'mensaje_contactos';
    protected $fillable = ['datos', 'email', 'celular', 'asunto', 'mensaje', 'fecha_enviado', 'fecha_visto', 'estado']; 
}
