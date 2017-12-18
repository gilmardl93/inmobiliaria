<?php

namespace App\Http\Controllers\Page\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Propiedad;
use App\Models\ContactosInfo;
use App\Models\Banner;
use App\Models\Social;

class HomeController extends Controller
{
    public function index()
    {
        $contactos      = ContactosInfo::all();
        $propiedades    = Propiedad::orderBy('id', 'desc')->take(12)->get();
        $ubigeos        = Propiedad::select('ubigeo')->distinct()->get();
        $estados        = Propiedad::select('estado')->distinct()->get();
        $tipos          = Propiedad::select('tipo')->distinct()->get();
        $banners        = Banner::orderBy('fecha_creado', 'desc')->get();
        $socials        = Social::all();
        $indexActivo    = 'active';
    	return view('page.home.index', compact(['propiedades', 'ubigeos', 'estados', 'tipos', 'contactos', 'indexActivo', 'banners', 'socials']));
    }

    public function contactos()
    {
        $contactoActivo = 'active';
        $contactos      = ContactosInfo::all();
        $socials        = Social::all();
    	return view('page.home.contactos', compact(['contactos', 'contactoActivo', 'socials']));
    }

    public function noticias()
    {
        $noticiaActivo  = 'active';
        $contactos      = ContactosInfo::all();
        $socials        = Social::all();
        $noticias = Noticia::orderBy('fecha', 'asc')->get();
    	return view('page.home.noticias', compact(['noticias', 'contactos', 'noticiaActivo', 'socials']));
    }

    public function propietarios()
    {
        $contactos      = ContactosInfo::all();
        $socials        = Social::all();
        return view('page.propietarios.negocios', compact(['contactos', 'socials']));
    }

    public function login()
    {
        $contactos      = ContactosInfo::all();
        $socials        = Social::all();
    	return view('page.home.login', compact(['contactos', 'socials']));
    }
}
