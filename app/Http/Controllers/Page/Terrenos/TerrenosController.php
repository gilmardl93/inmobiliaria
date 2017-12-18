<?php

namespace App\Http\Controllers\Page\Terrenos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use App\Models\ContactosInfo;
use App\Models\Social;

class TerrenosController extends Controller
{
    public function venta()
    {
    	$propiedades		= Propiedad::terrenosVenta()->get();
    	$ubigeos			= Propiedad::terrenosVenta()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'TERRENO VENTA';
    	return view('page.terrenos.venta', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }

    public function alquiler()
    {
    	$propiedades 		= Propiedad::terrenosAlquiler()->get();
    	$ubigeos			= Propiedad::terrenosAlquiler()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'TERRENO ALQUILER';
    	return view('page.terrenos.alquiler', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }
}
