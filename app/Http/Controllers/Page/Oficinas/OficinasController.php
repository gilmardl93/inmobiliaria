<?php

namespace App\Http\Controllers\Page\Oficinas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use App\Models\ContactosInfo;
use App\Models\Social;

class OficinasController extends Controller
{
    public function venta()
    {
    	$propiedades		= Propiedad::oficinasVenta()->get();
    	$ubigeos			= Propiedad::oficinasVenta()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'Oficinas VENTA';
    	return view('page.oficinas.venta', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }

    public function alquiler()
    {
    	$propiedades 		= Propiedad::oficinasAlquiler()->get();
    	$ubigeos			= Propiedad::oficinasAlquiler()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'Oficinas ALQUILER';
    	return view('page.oficinas.alquiler', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }
}
