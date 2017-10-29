<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    protected $table = "ubigeo";

    protected $fillable = ['codigo','nombre','descripcion'];

    public function scopeExiste($cadenaSQL, $id)
    {
    	return $cadenaSQL->where('id',$id);
    }

    public function scopeObtener($cadenaSQL, $data)
    {
    	return $cadenaSQL->select('id','descripcion as text')
                        ->where('descripcion','like',"%$data%");
    }
}
