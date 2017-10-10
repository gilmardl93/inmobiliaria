<?php

namespace App\Http\Controllers\Admin\Ubigeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ubigeo\RegistrarRequest;
use App\Models\Ubigeo;

class UbigeoController extends Controller
{
    public function index()
    {
    	return view('admin.ubigeo.index');
    }

    public function list()
    {
    	$list = Ubigeo::all();
    	$res['data'] = $list;
    	return $res;
    }

    public function create()
    {
    	return view('admin.ubigeo.create');
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
    	Ubigeo::create(['codigo' => $request->codigo, 'nombre' => $request->nombre, 'descripcion' => $request->descripcion]);
    	return redirect()->route('admin.ubigeo.index')->with('success','Se registro nuevo ubigeo');
    }

    public function edit($id)
    {
    	$ubigeo = Ubigeo::Existe($id)->get();
    	return view('admin.ubigeo.edit', compact('ubigeo'));
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
