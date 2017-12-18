<?php

namespace App\Http\Controllers\Page\Contactos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Http\Requests\Page\Contactos\ValidarRequest;

class ContactosController extends Controller
{
    public function store(ValidarRequest $request)
    {
    	Contacto::create(['apellidos' => $request->apellidos, 'nombres' => $request->nombres, 'email' => $request->email, 'asunto' => $request->asunto, 'mensaje' => $request->mensaje ]);
    	return back()->with('success', 'Mensaje enviado con exito');
    }
}
