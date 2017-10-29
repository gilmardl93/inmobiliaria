<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Propiedad extends Model
{
	use SoftDeletes;
	
    protected $table  = "propiedades";

    protected $fillable =  ['slug','idcategoria','idubigeo','titulo','imagen1','imagen2','imagen3','imagen4',
                            'zonificacion','descripcion','precio','area','frente','fondo','area_terreno',
                            'area_construida','bano','antiguedad','garaje','ambientes','jardin','patio','tv_cable',
                            'comedor','sala','bano_dormitorio','biblioteca','lavanderia','linea_telefonica',
                            'amoblado'];

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
