<?php

namespace App\Http\Controllers\Admin\Propiedades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Propiedades\RegistroRequest;
use App\Models\Propiedad;
use App\Models\Ubigeo;
use App\Models\Tipo;
use Auth;

class LocalesController extends Controller
{    
    public function index()
    {
    	return view('admin.propiedad.locales.index');
    }

    public function list()
    {
    	$list = Propiedad::locales();
    	$res['data'] = $list;
    	return $res;
    }

    public function create()
    {
        $ubigeo = Ubigeo::pluck('descripcion','id');
    	return view('admin.propiedad.locales.create', compact(['ubigeo']));
    }

    public function store(RegistroRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen1'))
        {
            $imagen1 = $request->file('imagen1')->store('locales','public');
        }else 
        {
            $imagen1 = "noimagen.jpg";
        }

        if($request->hasFile('imagen2'))
        {
            $imagen2 = $request->file('imagen2')->store('locales','public');
        }else 
        {
            $imagen2 = "noimagen.jpg";
        }

        if($request->hasFile('imagen3'))
        {
            $imagen3 = $request->file('imagen3')->store('locales','public');
        }else 
        {
            $imagen3 = "noimagen.jpg";
        }

        if($request->hasFile('imagen4'))
        {
            $imagen4 = $request->file('imagen4')->store('locales','public');
        }else 
        {
            $imagen4 = "noimagen.jpg";
        }
    	Propiedad::create([    
                        'estado'    => $request->estado,
                        'tipo'      => Propiedad::LOCALES,
                        'slug'      => $request->titulo, 
                        'titulo'    => $request->titulo,
                        'imagen1'   => $imagen1,
                        'imagen2'   => $imagen2,
                        'imagen3'   => $imagen3,
                        'imagen4'   => $imagen4,
                        'ubigeo'    => $request->ubigeo,
                        'frente'    => $request->frente,
                        'fondo'     => $request->fondo,
                        'area'      => $request->area,
                        'area_construida'   => $request->area_construida,
                        'area_terreno'      => $request->area_terreno,
                        'zonificacion'     => $request->zonificacion,
                        'banos'     => $request->banos,
                        'antiguedad'    => $request->antiguedad,
                        'garaje'    => $request->garaje,
                        'ambientes' => $request->ambientes,
                        'jardin'    => $request->jardin,
                        'patio'     => $request->patio,
                        'tv_cable'  => $request->tv_cable,
                        'comedor'   => $request->comedor,
                        'bano_dormitorio'   => $request->bano_dormitorio,
                        'biblioteca'    => $request->biblioteca,
                        'lavanderia'    => $request->lavanderia,
                        'linea_telefonica'  => $request->linea_telefonica,
                        'sala'      => $request->sala,
                        'amoblado'      => $request->amoblado,
                        'descripcion'   => $request->descripcion
                    ]);
    	return redirect()->route('admin.locales.index')->with('success','Se registro nueva propiedad');
    }

    public function edit($id)
    {
    	$propiedad = Propiedad::Existe($id)->get();
    	return view('admin.propiedad.locales.edit', compact('propiedad'));
    }

    public function update(Request $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen1'))
        {
            $imagen1 = $request->file('imagen1')->store('locales','public');
        }else 
        {
            $imagen1 = $request->img1;
        }

        if($request->hasFile('imagen2'))
        {
            $imagen2 = $request->file('imagen2')->store('locales','public');
        }else 
        {
            $imagen2 = $request->img2;
        }

        if($request->hasFile('imagen3'))
        {
            $imagen3 = $request->file('imagen3')->store('locales','public');
        }else 
        {
            $imagen3 = $request->img3;
        }

        if($request->hasFile('imagen4'))
        {
            $imagen4 = $request->file('imagen4')->store('locales','public');
        }else 
        {
            $imagen4 = $request->img4;
        }
    	Propiedad::Existe($request->id)->update([    
                        'estado'    => $request->estado,
                        'slug'      => $request->titulo, 
                        'titulo'    => $request->titulo,
                        'imagen1'   => $imagen1,
                        'imagen2'   => $imagen2,
                        'imagen3'   => $imagen3,
                        'imagen4'   => $imagen4,
                        'ubigeo'    => $request->ubigeo,
                        'frente'    => $request->frente,
                        'fondo'     => $request->fondo,
                        'area'      => $request->area,
                        'area_construida'   => $request->area_construida,
                        'area_terreno'      => $request->area_terreno,
                        'zonificacion'     => $request->zonificacion,
                        'banos'     => $request->banos,
                        'antiguedad'    => $request->antiguedad,
                        'garaje'    => $request->garaje,
                        'ambientes' => $request->ambientes,
                        'jardin'    => $request->jardin,
                        'patio'     => $request->patio,
                        'tv_cable'  => $request->tv_cable,
                        'comedor'   => $request->comedor,
                        'bano_dormitorio'   => $request->bano_dormitorio,
                        'biblioteca'    => $request->biblioteca,
                        'lavanderia'    => $request->lavanderia,
                        'linea_telefonica'  => $request->linea_telefonica,
                        'sala'      => $request->sala,
                        'amoblado'      => $request->amoblado,
                        'descripcion'   => $request->descripcion
                    ]);
    	return redirect()->route('admin.locales.index')->with('success','La propiedad fue actualizada');
    }

    public function delete($id)
    {
        date_default_timezone_set('America/Lima');
    	Propiedad::Existe($id)->delete();
    	return redirect()->route('admin.locales.index')->with('danger','Se elimino la propiedad');
    }
}
