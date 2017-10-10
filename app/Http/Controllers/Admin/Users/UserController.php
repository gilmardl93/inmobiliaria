<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\RegistrarRequest;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	return view('admin.user.index');
    }

    public function list()
    {
    	$list = User::all();
    	$res['data'] = $list;
    	return $res;
    }

    public function create()
    {
    	return view('admin.user.create');
    }

    public function store(RegistrarRequest $request)
    {
        date_default_timezone_set('America/Lima');
    	User::create(['username' => $request->username, 'password' => bcrypt($request->password), 'nombres' => $request->nombres, 'paterno' => $request->paterno, 'materno' => $request->materno, 'fecha_hora' => date("Y-m-d H:i:s")]);
    	return redirect()->route('admin.users.index')->with('success','Se registro nuevo usuario');
    }

    public function edit($id)
    {
    	$usuario = User::Existe($id)->get();
    	return view('admin.user.edit', compact('usuario'));
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
