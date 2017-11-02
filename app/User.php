<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $connection = 'mysql';
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','avatar','puesto_asig','sucursal_asig','estado','cod_empleado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getIsAdminAttribute()
    {
       return $this->role==0; // Es un Administrador | is_admin
    }
    public function getIsSupportAttribute()
    {
        return $this->role==1; // Es un Supervisor o Soporte | is_support
    }
    public function getIsEvaluadorAttribute()
    {
        return $this->role==2; // Es un Client | is_evaluador
    }
    public function getIsClientAttribute()
    {
        return $this->role==3; // Es un Client | is_client
    }
}
