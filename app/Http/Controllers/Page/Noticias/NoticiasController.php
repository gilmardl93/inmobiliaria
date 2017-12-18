<?php

namespace App\Http\Controllers\Page\Noticias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Noticia;

class NoticiasController extends Controller
{
    public function slug($slug)
    {
    	$noticia = Noticia::where('slug', $slug)->get();
    	return view('page.noticias.detalle', compact('noticia'));
    }
}
