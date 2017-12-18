<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Propiedad extends Model
{
	use SoftDeletes;
	
    protected $table  = "propiedades";

    protected $fillable =  ['estado','codigo','slug','idcategoria','tipo','ubigeo','titulo','imagen1','imagen2','imagen3','imagen4',                            'zonificacion','descripcion','precio','area','frente','fondo','area_terreno',                            'area_construida','banos','antiguedad','garaje','ambientes','jardin','patio','tv_cable',                            'comedor','sala','bano_dormitorio','biblioteca','lavanderia','linea_telefonica','amoblado', 'bano_completo', 'medio_bano', 'vista', 'dormitorios'];

    const CASAS         = 'CASAS';
    const DEPARTAMENTOS = 'DEPARTAMENTOS';
    const LOCALES       = 'LOCALES';
    const TERRENOS      = 'TERRENOS';
    const PLAYAS        = 'PLAYAS';
    const OFICINAS      = 'OFICINAS';
    const PROYECTOS     = 'PROYECTOS';
    const PROPIETARIOS  = 'PROPIETARIOS';

    public function scopeSlug($cadenaSQL, $slug)
    {
        return $cadenaSQL->where('slug', $slug)->get();
    }

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }

    public function scopeCasas($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','CASAS')->get();
    }

    public function scopeCasasAlquiler($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'CASAS')
                        ->where('estado', 'ALQUILER');
    }

    public function scopeCasasVenta($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'CASAS')
                        ->where('estado', 'VENTA');
    }

    public function scopeDepartamentos($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','DEPARTAMENTOS')->get();
    }

    public function scopeDepartamentosAlquiler($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'DEPARTAMENTOS')
                        ->where('estado', 'ALQUILER');
    }

    public function scopeDepartamentosVenta($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'DEPARTAMENTOS')
                        ->where('estado', 'VENTA');
    }

    public function scopeLocales($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','LOCALES')->get();
    }

    public function scopeLocalesAlquiler($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'LOCALES')
                        ->where('estado', 'ALQUILER');
    }

    public function scopeLocalesVenta($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'LOCALES')
                        ->where('estado', 'VENTA');
    }

    public function scopeOficinas($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','OFICINAS')->get();
    }

    public function scopeOficinasAlquiler($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'OFICINAS')
                        ->where('estado', 'ALQUILER');
    }

    public function scopeOficinasVenta($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'OFICINAS')
                        ->where('estado', 'VENTA');
    }

    public function scopePlayas($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','PLAYAS')->get();
    }

    public function scopePlayasAlquiler($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'PLAYAS')
                        ->where('estado', 'ALQUILER');
    }

    public function scopePlayasVenta($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'PLAYAS')
                        ->where('estado', 'VENTA');
    }

    public function scopeTerrenos($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','TERRENOS')->get();
    }

    public function scopeTerrenosAlquiler($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'TERRENOS')
                        ->where('estado', 'ALQUILER');
    }

    public function scopeTerrenosVenta($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'TERRENOS')
                        ->where('estado', 'VENTA');
    }

    public function scopeProyectos($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','PROYECTOS')->get();
    }

    public function scopeProyectosAlquiler($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'PROYECTOS')
                        ->where('estado', 'ALQUILER');
    }

    public function scopeProyectosVenta($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'PROYECTOS')
                        ->where('estado', 'VENTA');
    }

    public function scopePropietarios($cadenaSQL)
    {
        return $cadenaSQL->where('tipo','PROPIETARIOS')->get();
    }

    public function scopePropietariosAlquiler($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'PROPIETARIOS')
                        ->where('estado', 'ALQUILER');
    }

    public function scopePropietariosVenta($cadenaSQL)
    {
        return $cadenaSQL->where('tipo', 'PROPIETARIOS')
                        ->where('estado', 'VENTA');
    }

    public function scopeTipoEstado($cadenaSQL, $tipo, $estado)
    {
        return $cadenaSQL->where('tipo', $tipo)
                        ->where('estado', $estado);
    }

    public function scopeUbigeoEstado($cadenaSQL, $ubigeo, $estado)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', $estado);
    }

    public function scopeUbigeoTipo($cadenaSQL, $ubigeo, $tipo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('tipo', $tipo);
    }

    public function scopeGeneral($cadenaSQL, $ubigeo, $tipo, $estado)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('tipo', $tipo)
                        ->where('estado', $estado);
    }

    public function scopeUbigeoCasaVenta($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'CASAS');
    }

    public function scopeUbigeoCasaAlquiler($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'CASAS');
    }

    public function scopeUbigeoDepartamentoVenta($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'DEPARTAMENTOS');
    }

    public function scopeUbigeoDepartamentoAlquiler($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'DEPARTAMENTOS');
    }

    public function scopeUbigeoLocalVenta($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'LOCALES');
    }

    public function scopeUbigeoLocalAlquiler($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'LOCALES');
    }

    public function scopeUbigeoOficinaVenta($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'OFICINAS');
    }

    public function scopeUbigeoOficinaAlquiler($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'OFICINAS');
    }

    public function scopeUbigeoPlayaVenta($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'PLAYAS');
    }

    public function scopeUbigeoPlayaAlquiler($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'PLAYAS');
    }

    public function scopeUbigeoPropietarioVenta($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'PROPIETARIOS');
    }

    public function scopeUbigeoPropietarioAlquiler($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'PROPIETARIOS');
    }

    public function scopeUbigeoTerrenoVenta($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'TERRENOS');
    }

    public function scopeUbigeoTerrenoAlquiler($cadenaSQL, $ubigeo)
    {
        return $cadenaSQL->where('ubigeo', $ubigeo)
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'TERRENOS');
    }

    public function scopePrecioCasaVenta($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'CASAS');
    }

    public function scopePrecioCasaAlquiler($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'CASAS');
    }

    public function scopePrecioDepartamentoVenta($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'DEPARTAMENTOS');
    }

    public function scopePrecioDepartamentoAlquiler($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'DEPARTAMENTOS');
    }

    public function scopePrecioLocalVenta($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'LOCALES');
    }

    public function scopePrecioLocalAlquiler($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'LOCALES');
    }

    public function scopePrecioOficinaVenta($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'OFICINAS');
    }

    public function scopePrecioOficinaAlquiler($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'OFICINAS');
    }

    public function scopePrecioPlayaVenta($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'PLAYAS');
    }

    public function scopePrecioPlayaAlquiler($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'PLAYAS');
    }

    public function scopePrecioPropietarioVenta($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'PROPIETARIOS');
    }

    public function scopePrecioPropietarioAlquiler($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'PROPIETARIOS');
    }

    public function scopePrecioTerrenoVenta($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'VENTA')
                        ->where('tipo', 'TERRENOS');
    }

    public function scopePrecioTerrenoAlquiler($cadenaSQL, $data1, $data2)
    {
        return $cadenaSQL->whereBetween('precio', [$data1, $data2])
                        ->where('estado', 'ALQUILER')
                        ->where('tipo', 'TERRENOS');
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
