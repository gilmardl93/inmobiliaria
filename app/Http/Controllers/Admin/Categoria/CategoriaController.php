<?php

namespace App\Http\Controllers\Admin\Categoria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categoria\RegistrarRequest;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
    	return view('admin.categoria.index');
    }

    public function list()
    {
    	$list = Categoria::all();
    	$res['data'] = $list;
    	return $res;
    }

    public function create()
    {
    	return view('admin.categoria.create');
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
    	Categoria::create(['nombre' => $request->nombre]);
    	return redirect()->route('admin.categoria.index')->with('success','Se registro nuevo categoria');
    }

    public function edit($id)
    {
    	$categoria = Categoria::Existe($id)->get();
    	return view('admin.categoria.edit', compact('categoria'));
    }

    public function update(Request $request)
    {
        date_default_timezone_set('America/Lima');
    	Categoria::Existe($request->id)->update(['nombre' => $request->nombre]);	
    	return redirect()->route('admin.categoria.index')->with('success','categoria actualizado');
    }

    public function delete($id)
    {
    	Categoria::Existe($id)->delete();
    	return redirect()->route('admin.categoria.index')->with('danger','Se elimino la categoria');
    }
}
