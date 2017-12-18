<?php

namespace App\Http\Controllers\Page\Playas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use App\Models\ContactosInfo;
use App\Models\Social;

class PlayasController extends Controller
{
    public function venta()
    {
    	$propiedades		= Propiedad::playasVenta()->get();
    	$ubigeos			= Propiedad::playasVenta()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'PLAYA VENTA';
    	return view('page.playas.venta', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }

    public function alquiler()
    {
    	$propiedades 		= Propiedad::playasAlquiler()->get();
    	$ubigeos			= Propiedad::playasAlquiler()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'PLAYA ALQUILER';
    	return view('page.playas.alquiler', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }
}
