<?php

namespace App\Http\Controllers\Admin\Noticias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Noticia;

class NoticiaController extends Controller
{    
    public function index()
    {
    	return view('admin.noticias.index');
    }

    public function list()
    {
    	$list = Noticia::all();
    	$res['data'] = $list;
    	return $res;
    }

    public function store(RegistroRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen1'))
        {
            $imagen1 = $request->file('imagen1')->store('noticias','public');
        }else 
        {
            $imagen1 = "noimagen.jpg";
        }

    	Propiedad::create([    
                        'estado'    => $request->estado,
                        'tipo'      => Propiedad::CASAS,
                        'slug'      => $request->titulo, 
                        'titulo'    => $request->titulo,
                        'imagen1'   => $imagen1,
                        'imagen2'   => $imagen2,
                        'imagen3'   => $imagen3,
                        'imagen4'   => $imagen4,
                        'idubigeo'  => 1,
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
    	return redirect()->route('admin.casas.index')->with('success','Se registro nueva noticia');
    }

    public function edit($id)
    {
    	$noticia = Noticia::Existe($id)->get();
    	return view('admin.casas.edit', compact('noticia'));
    }

    public function update(Request $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen1'))
        {
            $imagen1 = $request->file('imagen1')->store('casas','public');
        }else 
        {
            $imagen1 = $request->img1;
        }

    	Noticia::Existe($request->id)->update([    
                        'estado'    => $request->estado,
                        'slug'      => $request->titulo, 
                        'titulo'    => $request->titulo,
                        'imagen1'   => $imagen1,
                        'imagen2'   => $imagen2,
                        'imagen3'   => $imagen3,
                        'imagen4'   => $imagen4,
                        'idubigeo'  => 1,
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
    	return redirect()->route('admin.noticias.index')->with('success','La noticia fue actualizada');
    }

    public function delete($id)
    {
        date_default_timezone_set('America/Lima');
    	Noticia::Existe($id)->delete();
    	return redirect()->route('admin.noticias.index')->with('danger','Se elimino la noticia');
    }
}
