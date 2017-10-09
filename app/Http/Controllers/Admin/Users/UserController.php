<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    	User::create(['username' => $request->username, 'password' => $request->password, 'nombres' => $request->nombres, 'paterno' => $request->paterno, 'materno' => $request->materno]);
    	return redirect()->route('admin.user.index')->with('success','Se registro nuevo usuario');
    }

    public function edit($id)
    {
    	$user = User::Existe($id)->first();
    	return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request)
    {
    	if($request->has('password')){
    		User::Existe($request->id)->update(['username' => $request->username, 'password' => $request->password, 'nombres' => $request->nombres, 'paterno' => $request->paterno, 'materno' => $request->materno]);	
    		return redirect()->route('admin.user.index')->with('success','Usuario actualizado');
    	}else 
    	{
    		User::Existe($request->id)->update(['username' => $request->username, 'nombres' => $request->nombres, 'paterno' => $request->paterno, 'materno' => $request->materno]);
    		return redirect()->route('admin.user.index')->with('success','Usuario actualizado');
    	}
    }

    public function delete($id)
    {
    	User::Existe($id)->delete();
    	return redirect()->route('admin.user.index')->with('danger','Se elimino el usuario');
    }
}
