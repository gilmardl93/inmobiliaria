<?php

namespace App\Http\Controllers\Page\Casas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use App\Models\ContactosInfo;
use App\Models\Social;

class CasasController extends Controller
{
    public function venta()
    {
    	$propiedades		= Propiedad::casasVenta()->get();
    	$ubigeos			= Propiedad::casasVenta()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'CASA VENTA';
    	return view('page.casas.venta', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }

    public function alquiler()
    {
    	$propiedades 		= Propiedad::casasAlquiler()->get();
    	$ubigeos			= Propiedad::casasAlquiler()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'CASA ALQUILER';
    	return view('page.casas.alquiler', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }
}
