<?php

namespace App\Http\Controllers\Page\NegocioPropietarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Page\NegocioPropietatios\ValidarRequest;
use App\Models\NegocioPropietario;

class NegocioPropietarioController extends Controller
{
    public function store(ValidarRequest $request)
    {
    	if($request->hasFile('archivo'))
    	{
    		$archivo = $request->file('archivo')->store('negocio_propietario', 'public');
    		NegocioPropietario::create([
    						'datos' 		=> $request->datos,
    						'email'			=> $request->email,
    						'celular'		=> $request->celular,
    						'descripcion'	=> $request->descripcion,
    						'tipo'			=> $request->tipo,
    						'archivo'		=> $archivo,
    						'fecha_enviado'	=> date('Y-m-d H:i:s')
    						]);
    	}    	
    	return back()->with('success', 'Su mensaje fue enviado en breves momentos nos pondremos en contacto con usted.');
    }
}
