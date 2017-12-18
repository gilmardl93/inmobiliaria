<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\RegistrarRequest;
use App\Models\MensajePropiedad;
use App\Models\MensajeContacto;
use App\Models\NegocioPropietario;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
        $ListarUsuarios = 'active';
    	return view('admin.user.index', compact(['MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'ListarUsuarios']));
    }

    public function list()
    {
    	$list = User::all();
    	$res['data'] = $list;
    	return $res;
    }

    public function create()
    {
        $ListarUsuarios = 'active';
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
    	return view('admin.user.create', compact(['MensajePropiedades', 'MensajeContactos', 'NegocioPropietarios', 'ListarUsuarios']));
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
    	User::create(['username' => $request->username, 'password' => bcrypt($request->password), 'nombres' => $request->nombres, 'paterno' => $request->paterno, 'materno' => $request->materno, 'fecha_hora' => date("Y-m-d H:i:s")]);
    	return redirect()->route('admin.users.index')->with('success','Se registro nuevo usuario');
    }

    public function edit($id)
    {
        $ListarUsuarios = 'active';
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
    	$usuario = User::Existe($id)->get();
    	return view('admin.user.edit', compact(['MensajePropiedades', 'MensajeContactos', 'usuario', 'NegocioPropietarios', 'ListarUsuarios']));
    }

    public function update(Request $request)
    {
        date_default_timezone_set('America/Lima');
    	if($request->has('password')){
    		User::Existe($request->id)->update(['username' => $request->username, 'password' => bcrypt($request->password), 'nombres' => $request->nombres, 'paterno' => $request->paterno, 'materno' => $request->materno]);	
    		return redirect()->route('admin.users.index')->with('success','Usuario actualizado');
    	}else 
    	{
    		User::Existe($request->id)->update(['username' => $request->username, 'nombres' => $request->nombres, 'paterno' => $request->paterno, 'materno' => $request->materno]);
    		return redirect()->route('admin.users.index')->with('success','Usuario actualizado');
    	}
    }

    public function delete($id)
    {
    	User::Existe($id)->delete();
    	return redirect()->route('admin.users.index')->with('danger','Se elimino el usuario');
    }
}
