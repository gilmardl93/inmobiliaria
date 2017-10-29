<?php

namespace App\Http\Controllers\Admin\Propiedades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use App\Models\Ubigeo;

class PropiedadesController extends Controller
{
    public function index()
    {
    	return view('admin.propiedad.index');
    }

    public function list()
    {
    	$list = Propiedad::all();
    	$res['data'] = $list;
    	return $res;
    }

    public function create()
    {
        $ubigeo = Ubigeo::pluck('descripcion','id');
    	return view('admin.propiedad.create', compact('ubigeo'));
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
    	Propiedad::create(['nombre' => $request->nombre]);
    	return redirect()->route('admin.propiedad.index')->with('success','Se registro nueva propiedad');
    }

    public function edit($id)
    {
    	$propiedad = Propiedad::Existe($id)->get();
    	return view('admin.propiedad.edit', compact('propiedad'));
    }

    public function update(Request $request)
    {
        date_default_timezone_set('America/Lima');
    	Propiedad::Existe($request->id)->update(['nombre' => $request->nombre]);	
    	return redirect()->route('admin.propiedad.index')->with('success','propiedad actualizada');
    }

    public function delete($id)
    {
    	Propiedad::Existe($id)->delete();
    	return redirect()->route('admin.propiedad.index')->with('danger','Se elimino la propiedad');
    }
}
