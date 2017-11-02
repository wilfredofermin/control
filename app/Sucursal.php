<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $fillable = [
        'sucursal', 'estado','telefono','direccion'
    ];
}
