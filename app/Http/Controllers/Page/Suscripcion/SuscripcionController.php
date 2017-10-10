<?php

namespace App\Http\Controllers\Page\Suscripcion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Suscripcion;

class SuscripcionController extends Controller
{
    public function store(Request $request)
    {
    	dd($request->email);
    	Suscripcion::create(['email' => $request->email]);
    	return redirect()->route('page.home.index');
    }
}
