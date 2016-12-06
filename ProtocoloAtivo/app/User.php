<?php

namespace PROATIVO;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email','password','setor'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getAuthPassword(){
        return $this->password;
    }
    public function setor(){
        return $this->hasOne('App\Setor');
    }

    public function protocolo(){
        return $this->hasOne('PROATIVO\Protocolo');
    }
}
