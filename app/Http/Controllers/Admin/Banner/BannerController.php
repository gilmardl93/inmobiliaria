<?php

namespace App\Http\Controllers\Admin\Banner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MensajePropiedad;
use App\Models\MensajeContacto;
use App\Models\NegocioPropietario;
use App\Models\Banner;
use Auth;

class BannerController extends Controller
{
    public function index()
    {
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
        $banners = Banner::orderBy('fecha_creado', 'desc')->get();
        $ListarBanner = 'active';
    	return view('admin.banner.index', compact(['MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'ListarBanner', 'banners']));
    }

    public function list()
    {
    	$list = Banner::all();
    	$res['data'] = $list;
    	return $res;
    }

    public function create()
    {
        $ListarBanner = 'active';
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
    	return view('admin.banner.create', compact(['MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'ListarBanner']));
    }

    public function store(Request $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
        	$imagen = $request->file('imagen')->store('banner', 'public');
    		Banner::create(['imagen' => $imagen, 'fecha_creado' => date('Y-m-d H:i:s')]);	
        }
    	return redirect()->route('admin.banner.index')->with('success','Se registro nuevo banner');
    }

    public function edit($id)
    {
        $ListarBanner = 'active';
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
    	$banner = Banner::Existe($id)->get();
    	return view('admin.banner.edit', compact(['MensajePropiedades', 'MensajeContactos', 'banner', 'NegocioPropietarios', 'ListarBanner']));
    }

    public function update(Request $request)
    {
        date_default_timezone_set('America/Lima');
    	Banner::Existe($request->id)->update(['nombre' => $request->nombre]);	
    	return redirect()->route('admin.banner.index')->with('success','banner actualizado');
    }

    public function delete($id)
    {
    	$banner = Banner::find($id);
    	$banner->delete();
    	return redirect()->route('admin.banner.index')->with('danger','Se elimino el banner');
    }
}
