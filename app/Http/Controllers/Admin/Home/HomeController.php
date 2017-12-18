<?php

namespace App\Http\Controllers\Admin\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MensajePropiedad;
use App\Models\MensajeContacto;
use App\Models\NegocioPropietario;
use App\Models\Propiedad;
use Auth;

class HomeController extends Controller
{
	public function index()
	{
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
        $propiedades = Propiedad::inRandomOrder()->take(12)->get();
        $ListarHome = 'active';
		return view('admin.home.index', compact(['MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'ListarHome', 'propiedades']));
	}
}
