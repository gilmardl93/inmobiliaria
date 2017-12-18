<?php

namespace App\Http\Controllers\Admin\Noticias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Noticias\ValidarRequest;
use App\Models\MensajePropiedad;
use App\Models\MensajeContacto;
use App\Models\NegocioPropietario;
use App\Models\Noticia;

class NoticiasController extends Controller
{
    public function index()
    {
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
        $ListarNoticias = 'active';
    	return view('admin.noticias.index', compact(['MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'ListarNoticias']));
    }

    public function list()
    {
    	$list = Noticia::all();
    	$res['data'] = $list;
    	return $res;
    }

    public function create()
    {
        $ListarNoticias = 'active';
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
    	return view('admin.noticias.create', compact(['MensajePropiedades', 'MensajeContactos', 'ListarNoticias', 'NegocioPropietarios']));
    }

    public function store(ValidarRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $imagen = $request->file('imagen')->store('noticias','public');
        }else 
        {
            $imagen = "noimagen.jpg";
        }

    	Noticia::create([    
                        'slug'      	=> $request->titulo, 
                        'titulo'    	=> $request->titulo,
                        'imagen'   		=> $imagen,
                        'descripcion'   => $request->descripcion,
                        'fecha'         => date('Y-m-d H:i:s')
                    ]);
    	return redirect()->route('admin.noticias.index')->with('success','Se registro nueva noticia');
    }

    public function edit($id)
    {
        $ListarNoticias = 'active';
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
    	$noticia = Noticia::Existe($id)->get();
    	return view('admin.noticias.edit', compact(['MensajePropiedades', 'MensajeContactos', 'noticia', 'ListarNoticias', 'NegocioPropietarios']));
    }

    public function update(ValidarRequest $request)
    {
        date_default_timezone_set('America/Lima');
        if($request->hasFile('imagen'))
        {
            $imagen = $request->file('imagen')->store('noticia','public');
        }else 
        {
            $imagen = $request->img;
        }
    	Noticia::Existe($request->id)->update([    
                        'slug'      	=> $request->titulo, 
                        'titulo'    	=> $request->titulo,
                        'imagen'   		=> $imagen,
                        'descripcion'   => $request->descripcion,
                    ]);
    	return redirect()->route('admin.noticias.index')->with('success','La noticia fue actualizada');
    }

    public function delete($id)
    {
        date_default_timezone_set('America/Lima');
    	Noticia::Existe($id)->delete();
    	return redirect()->route('admin.noticias.index')->with('danger','Se elimino la noticia');
    }
}
