<?php

namespace App\Http\Controllers\Admin\Noticias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Noticias\ValidarRequest;
use App\Models\Noticia;

class NoticiasController extends Controller
{
    public function index()
    {
    	return view('admin.noticias.index');
    }

    public function list()
    {
    	$list = Noticia::all();
    	$res['data'] = $list;
    	return $res;
    }

    public function create()
    {
    	return view('admin.noticias.create');
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
                    ]);
    	return redirect()->route('admin.noticias.index')->with('success','Se registro nueva noticia');
    }

    public function edit($id)
    {
    	$noticia = Noticia::Existe($id)->get();
    	return view('admin.noticias.edit', compact('noticia'));
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
