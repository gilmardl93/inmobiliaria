<?php

namespace App\Http\Controllers\Page\Proyectos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use App\Models\ContactosInfo;
use App\Models\Social;

class ProyectosController extends Controller
{
    public function venta()
    {
    	$propiedades		= Propiedad::proyectosVenta()->get();
    	$ubigeos			= Propiedad::proyectosVenta()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'PROYECTO VENTA';
    	return view('page.proyectos.venta', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }

    public function alquiler()
    {
    	$propiedades 		= Propiedad::proyectosAlquiler()->get();
    	$ubigeos			= Propiedad::proyectosAlquiler()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'PROYECTO ALQUILER';
    	return view('page.proyectos.alquiler', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }
}
