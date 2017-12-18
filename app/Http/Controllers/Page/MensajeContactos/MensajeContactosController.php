<?php

namespace App\Http\Controllers\Page\MensajeContactos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Page\Contactos\ValidarRequest;
use App\Models\MensajeContacto;

class MensajeContactosController extends Controller
{
    public function store(ValidarRequest $request)
    {
    	MensajeContacto::create(['datos' => $request->datos, 'celular' => $request->celular ,'email' => $request->email, 'asunto' => $request->asunto, 'mensaje' => $request->mensaje, 'fecha_enviado' => date('Y-m-d H:i:s') ]);
    	return back()->with('success', 'Mensaje enviado con exito');
    }
}
