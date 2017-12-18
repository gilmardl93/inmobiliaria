<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
    	if(Auth::attempt(['username' => $request->username, 'password' =>  $request->password ]))
    	{
    		return redirect()->route('admin.home.index');
    	}else 
    	{
    		return back()->with('danger','Usuario y/o clave incorrecto', compact(['MensajePropiedad']));
    	}
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
