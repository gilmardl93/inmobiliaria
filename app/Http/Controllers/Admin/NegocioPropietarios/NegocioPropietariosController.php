<?php

namespace App\Http\Controllers\Admin\NegocioPropietarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NegocioPropietario;
use App\Models\MensajePropiedad;
use App\Models\MensajeContacto;

class NegocioPropietariosController extends Controller
{
    public function index()
    {
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios = NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
        $listarNegocioPropietarios = 'active';
    	return view('admin.negocios_propietarios.index', compact(['MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'listarNegocioPropietarios']));
    }

    public function list()
    {
    	$list = NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
    	$res['data'] = $list;
    	return $res;
    }

    public function delete($id)
    {
    	$data = NegocioPropietario::find($id);
    	$data->delete();
    	return back()->with('danger', 'Mensaje eliminado');
    }

    public function download($id)
    {
        $archivo = NegocioPropietario::find($id);
        $descargar  = storage_path('/app/public/'.$archivo->archivo);
        return response()->download($descargar);
    }
}
