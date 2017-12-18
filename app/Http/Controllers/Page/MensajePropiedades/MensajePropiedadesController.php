<?php

namespace App\Http\Controllers\Page\MensajePropiedades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Page\MensajePropiedades\MensajePropiedadesRequest;
use App\Models\MensajePropiedad;

class MensajePropiedadesController extends Controller
{
    public function store(MensajePropiedadesRequest $request)
    {
    	$data = MensajePropiedad::create([
    								'idpropiedad' 	=> $request->idpropiedad,
    								'datos'			=> $request->datos,
    								'celular'		=> $request->celular,
    								'email'			=> $request->email,
    								'asunto'		=> $request->asunto,
    								'mensaje'		=> $request->mensaje,
    								'fecha_enviado'	=> date('Y-m-d H:i:s')
    							]);
    	return back()->with('success', 'Mensaje enviado, en breves momentos nos pondremos en contacto con usted.');
    }
}
