<?php

namespace PROATIVO;

use Illuminate\Database\Eloquent\Model;

class Tipo_documento extends Model
{
    //
    protected $fillable = ['nome','descricao'];

    public function protocolo(){
         return $this->belongstoMany('PROATIVO\Protocolo');
    }
}
