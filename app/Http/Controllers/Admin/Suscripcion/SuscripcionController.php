<?php

namespace App\Http\Controllers\Admin\Suscripcion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuscripcionController extends Controller
{
    public function index()
    {
    	return view('admin.suscripcion.index');
    }

    public function list()
    {
    	$list = Suscripcion::all();
    	$res['data']	= $list;
    	return $res;
    }

    public function delete($id)
    {
    	Suscripcion::Existe()->delete();
    	return redirect()->route('admin.suscripcion.index');
    }
}
