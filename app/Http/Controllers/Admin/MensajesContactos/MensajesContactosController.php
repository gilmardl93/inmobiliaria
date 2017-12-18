<?php

namespace App\Http\Controllers\Admin\MensajesContactos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MensajePropiedad;
use App\Models\MensajeContacto;
use App\Models\NegocioPropietario;

class MensajesContactosController extends Controller
{
    public function index()
    {
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
        $listarMensajesContactos = 'active';
    	return view('admin.mensajes_contactos.index', compact(['MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'listarMensajesContactos']));
    }

    public function list()
    {
    	$list = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
    	$res['data'] = $list;
    	return $res;
    }

    public function delete($id)
    {
    	$data = MensajeContacto::find($id);
    	$data->delete();
    	return back()->with('danger', 'Mensaje eliminado');
    }
}
