<?php

namespace App\Http\Controllers\Admin\Contactos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MensajePropiedad;
use App\Models\MensajeContacto;
use App\Models\NegocioPropietario;
use App\Models\ContactosInfo;


class ContactosController extends Controller
{
    public function edit()
    {
        $ListarContactos = 'active';
        $MensajePropiedades = MensajePropiedad::orderBy('fecha_enviado', 'desc')->get();
        $MensajeContactos   = MensajeContacto::orderBy('fecha_enviado', 'desc')->get();
        $NegocioPropietarios= NegocioPropietario::orderBy('fecha_enviado', 'desc')->get();
        if(empty(ContactosInfo::find(1)))
        {
            ContactosInfo::create(['direccion' => 'Gilmar', 'email1' => 'gilmarmoreno1993@gmail.com', 'email2' => 'gilmarmoreno1993@gmail.com', 'telefono1' => '972255980', 'telefono2' => '972255980']);
        }else 
        {
            $contactos = ContactosInfo::find(1);
        }
    	return view('admin.contacto.index', compact(['MensajePropiedades', 'MensajeContactos', 'contactos', 'NegocioPropietarios', 'ListarContactos']));
    }

    public function update(Request $request)
    {
    	ContactosInfo::where('id', $request->id)->update(['direccion' => $request->direccion, 'email1' => $request->email1, 'email2' => $request->email2, 'telefono1' => $request->telefono1, 'telefono2' => $request->telefono2]);
    	return back()->with('success', 'Contacto actualizado');
    }
}
