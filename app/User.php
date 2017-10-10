<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'password', 'nombres', 'paterno', 'materno','fecha_hora'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeExiste($cadenaSQL, $id)
    {
        return $cadenaSQL->where('id',$id);
    }

    public function getDatosAttribute()
    {
        return $datos = $this->paterno.' '.$this->materno.' '.$this->nombres;
    }

    public function setNombresAttribute($value)
    {
        $this->attributes['nombres']    = trim(Str::upper($value));
    }

    public function setPaternoAttribute($value)
    {
        $this->attributes['paterno']    = trim(Str::upper($value));
    }

    public function setMaternoAttribute($value)
    {
        $this->attributes['materno']    = trim(Str::upper($value));
    }
}
