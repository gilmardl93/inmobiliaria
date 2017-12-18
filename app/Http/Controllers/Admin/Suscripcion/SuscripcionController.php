<?php

namespace App\Http\Controllers\Admin\Suscripcion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MensajePropiedad;
use App\Models\MensajeContacto;
use App\Models\NegocioPropietario;
use App\Models\Suscripcion;

class SuscripcionController extends Controller
{
    public function index()
    {
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
        $ListarSuscripcion = 'active';
    	return view('admin.suscripcion.index', compact(['MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'ListarSuscripcion']));
    }

    public function list()
    {
    	$list = Suscripcion::orderBy('fecha_creado', 'desc')->get();
    	$res['data']	= $list;
    	return $res;
    }

    public function delete($id)
    {
    	$data = Suscripcion::find($id);
        $data->delete();
    	return back()->with('danger','La suscripción fue eliminado');
    }
}
