<?php

namespace App\Http\Controllers\Admin\Categoria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categoria\RegistrarRequest;
use App\Models\MensajePropiedad;
use App\Models\MensajeContacto;
use App\Models\NegocioPropietario;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
        $ListarCategoria = 'active';
    	return view('admin.categoria.index', compact(['MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'ListarCategoria']));
    }

    public function list()
    {
    	$list = Categoria::all();
    	$res['data'] = $list;
    	return $res;
    }

    public function create()
    {
        $ListarCategoria = 'active';
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
    	return view('admin.categoria.create', compact(['MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'ListarCategoria']));
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
    	Categoria::create(['nombre' => $request->nombre]);
    	return redirect()->route('admin.categoria.index')->with('success','Se registro nuevo categoria');
    }

    public function edit($id)
    {
        $ListarCategoria = 'active';
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
    	$categoria = Categoria::Existe($id)->get();
    	return view('admin.categoria.edit', compact(['MensajePropiedades', 'MensajeContactos', 'categoria', 'NegocioPropietarios', 'ListarCategoria']));
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
