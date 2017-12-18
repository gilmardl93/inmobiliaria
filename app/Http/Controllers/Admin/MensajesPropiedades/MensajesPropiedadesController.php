<?php

namespace App\Http\Controllers\Admin\MensajesPropiedades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MensajePropiedad;
use App\Models\MensajeContacto;
use App\Models\NegocioPropietario;

class MensajesPropiedadesController extends Controller
{
    public function index()
    {
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
        $listarMensajesPropiedades = 'active';
    	return view('admin.mensajes_propiedades.index', compact(['MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'listarMensajesPropiedades']));
    }

    public function list()
    {
    	$list = MensajePropiedad::with('propiedad')->orderBy('fecha_enviado', 'desc')->get();
    	$res['data'] = $list;
    	return $res;
    }

    public function delete($id)
    {
    	$data = MensajePropiedad::find($id);
    	$data->delete();
    	return back()->with('danger', 'Mensaje eliminado');
    }
}
