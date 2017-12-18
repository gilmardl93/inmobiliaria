<?php

namespace App\Http\Controllers\Admin\Ubigeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ubigeo\RegistrarRequest;
use App\Models\MensajePropiedad;
use App\Models\MensajeContacto;
use App\Models\Ubigeo;

class UbigeoController extends Controller
{
    public function index()
    {
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
    	return view('admin.ubigeo.index', compact(['MensajePropiedades', 'MensajeContactos']));
    }

    public function list()
    {
    	$list = Ubigeo::all();
    	$res['data'] = $list;
    	return $res;
    }

    public function ubigeo($data)
    {
        $name = $data ?:'';
        $name = trim(strtoupper('$name'));
        $ubigeo = Ubigeo::Obtener($name)->get();
        return response()->json($ubigeo);
    }

    public function create()
    {
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
    	return view('admin.ubigeo.create', compact(['MensajePropiedades', 'MensajeContactos']));
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
    	Ubigeo::create(['codigo' => $request->codigo, 'nombre' => $request->nombre, 'descripcion' => $request->descripcion]);
    	return redirect()->route('admin.ubigeo.index')->with('success','Se registro nuevo ubigeo');
    }

    public function edit($id)
    {
        $MensajePropiedades = MensajePropiedad::all();
        $MensajeContactos   = MensajeContacto::all();
    	$ubigeo = Ubigeo::Existe($id)->get();
    	return view('admin.ubigeo.edit', compact(['MensajePropiedades', 'MensajeContactos', 'ubigeo']));
    }

    public function update(Request $request)
    {
        date_default_timezone_set('America/Lima');
    	Ubigeo::Existe($request->id)->update(['codigo' => $request->codigo, 'nombre' => $request->nombre, 'descripcion' => $request->descripcion]);	
    	return redirect()->route('admin.ubigeo.index')->with('success','Ubigeo actualizado');
    }

    public function delete($id)
    {
    	Ubigeo::Existe($id)->delete();
    	return redirect()->route('admin.ubigeo.index')->with('danger','Se elimino el ubigeo');
    }
}
