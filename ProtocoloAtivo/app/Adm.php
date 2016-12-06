<?php

namespace PROATIVO;

use Illuminate\Database\Eloquent\Model;

class Adm extends Model
{
    //
    protected $fillable = ['name', 'email','password'];

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
}
