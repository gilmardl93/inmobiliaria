<?php

namespace App\Http\Controllers\Admin\Social;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Social;
use App\Models\MensajePropiedad;
use App\Models\MensajeContacto;
use App\Models\NegocioPropietario;
use Auth;

class SocialController extends Controller
{
    public function edit()
    {
    	$listarSocial = 'active';
    	
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
        if(empty(Social::find(1)))
        {
            Social::create(['facebook' => 'https://www.facebook.com/gilmar.moreno.7186',
                        'twitter' => 'https://www.facebook.com/gilmar.moreno.7186']);
            $social = 1;
        }else 
        {
            $social = Social::find(1);
        }
    	return view('admin.social.edit', compact(['social', 'MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'listarSocial']));
    }

    public function update(Request $request)
    {
    	Social::where('id',1)->update(['facebook' => $request->facebook, 'twitter' => $request->twitter]);
    	return back()->with('success', 'Se actualizaron las redes sociales');
    }
}
