<?php

namespace App\Http\Controllers\Page\Suscripcion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Page\Suscripcion\ValidarRequest;
use App\Models\Suscripcion;

class SuscripcionController extends Controller
{
    public function store(ValidarRequest $request)
    {
    	Suscripcion::create(['datos' => $request->datos, 'celular' => $request->celular, 'email' => $request->email, 'fecha_creado' => date('Y-m-d H:i:s') ]);
    	return back()->with('success', 'Se registro su suscripcion');
    }

    public function delete($id)
    {
    	$suscripcion = Suscripcion::find($id);
    	$suscripcion->delete();
    	return back()->with('danger', 'Se elimino la suscripcion');
    }
}
