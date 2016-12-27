<?php

namespace PROATIVO;

use Illuminate\Database\Eloquent\Model;

class destinatario extends Model
{
    //
    protected $fillable = ['nome','razao_social','cnpj'];
    
    public function protocolo(){
        return $this->hasOne('PROATIVO\Protocolo');
    }
}
