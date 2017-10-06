<?php

namespace App\Http\Controllers\Page\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('page.home.index');
    }

    public function contactos()
    {
    	return view('page.home.contactos');
    }

    public function noticias()
    {
    	return view('page.home.noticias');
    }

    public function login()
    {
    	return view('page.home.login');
    }
}
