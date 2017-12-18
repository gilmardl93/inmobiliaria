<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suscripcion extends Model
{
	use SoftDeletes;

    protected $table = 'suscripcion';

    protected $fillable = ['email', 'datos', 'celular', 'fecha_creado'];

}
