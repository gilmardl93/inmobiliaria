<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactosInfo extends Model
{
    protected $table = 'contactos_info';

    protected $fillable = ['direccion', 'email1', 'email2', 'telefono1', 'telefono2'];
}
