<?php

namespace App\Http\Controllers\Page\Propiedades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use App\Models\ContactosInfo;
use App\Models\Social;

class PropiedadesController extends Controller
{
    public function detalle($slug)
    {
    	$propiedad = Propiedad::slug($slug);
        $contactos = ContactosInfo::all();
        $socials            = Social::all();
    	return view('page.propiedad.detalle', compact(['propiedad', 'contactos', 'socials']));
    }

    public function search(Request $request)
    {
        $socials            = Social::all();
    	if(empty($request->ubigeo) && empty($request->tipo) && empty($request->estado))
    	{
    		return back()->with('danger', 'Debe seleccionar una opción para buscar.');
    	}else if(empty($request->ubigeo) && empty($request->tipo))
    	{
    		$propiedades = Propiedad::where('estado', $request->estado)->get();
        	$contactos = ContactosInfo::all();
    		return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
    	}else if(empty($request->tipo) && empty($request->estado))
    	{
    		$propiedades = Propiedad::where('ubigeo', $request->ubigeo)->get();
        	$contactos = ContactosInfo::all();
    		return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
    	}else if(empty($request->ubigeo) && empty($request->estado))
    	{
    		$propiedades = Propiedad::where('tipo', $request->tipo)->get();
        	$contactos = ContactosInfo::all();
    		return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
    	}else if(empty($request->ubigeo))
    	{
    		$propiedades = Propiedad::tipoEstado($request->tipo, $request->estado)->get();
        	$contactos = ContactosInfo::all();
    		return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
    	}else if(empty($request->tipo))
    	{
    		$propiedades = Propiedad::ubigeoEstado($request->ubigeo, $request->estado)->get();
        	$contactos = ContactosInfo::all();
    		return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
    	}else if(empty($request->estado))
    	{
    		$propiedades = Propiedad::ubigeoTipo($request->ubigeo, $request->tipo)->get();
        	$contactos = ContactosInfo::all();
    		return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
    	}else 
    	{
    		$propiedades = Propiedad::general($request->ubigeo, $request->tipo, $request->estado)->get();
        	$contactos = ContactosInfo::all();
    		return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
    	}
    }

    public function search2(Request $request)
    {
        $socials            = Social::all();
        if(empty($request->ubigeo))
        {
            return back();
        }else if($request->clave == 'CASA VENTA')
        {
            $propiedades = Propiedad::ubigeoCasaVenta($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'CASA ALQUILER') 
        {
            $propiedades = Propiedad::ubigeoCasaAlquiler($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'DEPARTAMENTOS VENTA') 
        {
            $propiedades = Propiedad::ubigeoDepartamentoVenta($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));

        }else if($request->clave == 'DEPARTAMENTOS ALQUILER') 
        {
            $propiedades = Propiedad::ubigeoDepartamentoAlquiler($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'LOCALES VENTA') 
        {
            $propiedades = Propiedad::ubigeoLocalVenta($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'LOCALES ALQUILER') 
        {
            $propiedades = Propiedad::ubigeoLocalAlquiler($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'OFICINAS VENTA') 
        {
            $propiedades = Propiedad::ubigeoOficinaVenta($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'OFICINAS ALQUILER') 
        {
            $propiedades = Propiedad::ubigeoOficinaAlquiler($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'PLAYAS VENTA') 
        {
            $propiedades = Propiedad::ubigeoPlayaVenta($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'PLAYAS ALQUILER') 
        {
            $propiedades = Propiedad::ubigeoPlayaAlquiler($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'PROPIETARIOS VENTA') 
        {
            $propiedades = Propiedad::ubigeoPropietarioVenta($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'PROPIETARIOS ALQUILER') 
        {
            $propiedades = Propiedad::ubigeoPropietarioAlquiler($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'PROYECTOS VENTA') 
        {
            $propiedades = Propiedad::ubigeoProyectoVenta($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'PROYECTOS ALQUILER') 
        {
            $propiedades = Propiedad::ubigeoProyectoAlquiler($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'TERRENOS VENTA') 
        {
            $propiedades = Propiedad::ubigeoTerrenoVenta($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'TERRENOS ALQUILER') 
        {
            $propiedades = Propiedad::ubigeoTerrenoAlquiler($request->ubigeo)->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }
    }

    public function search3(Request $request)
    {
        $socials            = Social::all();
        if(empty($request->precio))
        {
            return back()->with('danger', 'Debe seleccionar un rango');
        }else if($request->clave == 'CASA VENTA')
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioCasaVenta($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'CASA ALQUILER') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioCasaAlquiler($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'DEPARTAMENTOS VENTA') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioDepartamentoVenta($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));

        }else if($request->clave == 'DEPARTAMENTOS ALQUILER') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioDepartamentoAlquiler($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'LOCALES VENTA') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioLocalVenta($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'LOCALES ALQUILER') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioLocalAlquiler($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'OFICINAS VENTA') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioOficinaVenta($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'OFICINAS ALQUILER') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioOficinaAlquiler($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'PLAYAS VENTA') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioPlayaVenta($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'PLAYAS ALQUILER') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioPlayaAlquiler($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'PROPIETARIOS VENTA') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioPropietarioVenta($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'PROPIETARIOS ALQUILER') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioPropietarioAlquiler($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'PROYECTOS VENTA') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioProyectoVenta($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'PROYECTOS ALQUILER') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioProyectoAlquiler($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'TERRENOS VENTA') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioTerrenoVenta($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }else if($request->clave == 'TERRENOS ALQUILER') 
        {
            $data = explode(',', $request->precio);
            $propiedades = Propiedad::precioTerrenoAlquiler($data[0], $data[1])->get();
            $contactos = ContactosInfo::all();
            return view('page.propiedades.resultado', compact(['propiedades', 'contactos', 'socials']));
        }

    }
}
