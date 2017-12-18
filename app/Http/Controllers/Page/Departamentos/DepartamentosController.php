<?php

namespace App\Http\Controllers\Page\Departamentos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use App\Models\ContactosInfo;
use App\Models\Social;


class DepartamentosController extends Controller
{
    public function venta()
    {
    	$propiedades		= Propiedad::departamentosVenta()->get();
    	$ubigeos			= Propiedad::departamentosVenta()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'DEPARTAMENTO VENTA';
    	return view('page.departamentos.venta', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }

    public function alquiler()
    {
    	$propiedades 		= Propiedad::departamentosAlquiler()->get();
    	$ubigeos			= Propiedad::departamentosAlquiler()->select('ubigeo')->distinct()->get();
        $contactos      	= ContactosInfo::all();
        $socials            = Social::all();
        $categoriaActivo	= 'active';
        $hidden				= 'DEPARTAMENTO ALQUILER';
    	return view('page.departamentos.alquiler', compact(['propiedades', 'contactos', 'categoriaActivo', 'ubigeos', 'hidden', 'socials']));    	
    }
}
