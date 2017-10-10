<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Categoria extends Model
{
	use SoftDeletes;

    protected $table = "categoria";

    protected $fillable = ['nombre'];

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }

    public function setNombreAttribute($value)
    {
    	$this->attributes['nombre']	= Str::upper($value);
    }
}
