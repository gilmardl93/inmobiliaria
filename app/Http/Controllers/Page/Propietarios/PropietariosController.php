<?php

namespace App\Http\Controllers\Page\Propietarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use App\Models\ContactosInfo;
use App\Models\Social;

class PropietariosController extends Controller
{
    public function venta()
    {
    	$propiedades		= Propiedad::propietariosVenta()->get();
    	$ubigeos			= Propiedad::propietariosVenta()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'PROPIETARIOS VENTA';
    	return view('page.propietarios.venta', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }

    public function alquiler()
    {
    	$propiedades 		= Propiedad::propietariosAlquiler()->get();
    	$ubigeos			= Propiedad::propietariosAlquiler()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'PROPIETARIOS ALQUILER';
    	return view('page.propietarios.alquiler', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }
}
