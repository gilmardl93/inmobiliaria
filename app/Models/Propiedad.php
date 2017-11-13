<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Propiedad extends Model
{
	use SoftDeletes;
	
    protected $table  = "propiedades";

    protected $fillable =  ['slug','idcategoria','ubigeo','titulo','imagen1','imagen2','imagen3','imagen4',
                            'zonificacion','descripcion','precio','area','frente','fondo','area_terreno',
                            'area_construida','banos','antiguedad','garaje','ambientes','jardin','patio','tv_cable',
                            'comedor','sala','bano_dormitorio','biblioteca','lavanderia','linea_telefonica',
                            'amoblado'];

    const CASAS         = 'CASAS';
    const DEPARTAMENTOS = 'DEPARTAMENTOS';
    const LOCALES       = 'LOCALES';
    const TERRENOS      = 'TERRENOS';
    const PLAYAS        = 'PLAYAS';
    const OFICINAS      = 'OFICINAS';

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }

    public function scopeCasas($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','CASAS')->get();
    }

    public function scopeDepartamentos($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','DEPARTAMENTOS')->get();
    }

    public function scopeLocales($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','LOCALES')->get();
    }

    public function scopeOficinas($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','OFICINAS')->get();
    }

    public function scopePlayas($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','PLAYAS')->get();
    }

    public function scopeTerrenos($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','TERRENOS')->get();
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function setTituloAttribute($value)
    {
        $this->attributes['titulo'] = Str::upper($value);
    }

    public function setZonificacionAttribute($value)
    {
        $this->attributes['zonificacion'] = Str::upper($value);
    }

}
