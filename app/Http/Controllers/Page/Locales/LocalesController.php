<?php

namespace App\Http\Controllers\Page\Locales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use App\Models\ContactosInfo;
use App\Models\Social;

class LocalesController extends Controller
{
    public function venta()
    {
    	$propiedades		= Propiedad::localesVenta()->get();
    	$ubigeos			= Propiedad::localesVenta()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'CASA VENTA';
    	return view('page.locales.venta', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }

    public function alquiler()
    {
    	$propiedades 		= Propiedad::localesAlquiler()->get();
    	$ubigeos			= Propiedad::localesAlquiler()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'CASA ALQUILER';
    	return view('page.locales.alquiler', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }
}
