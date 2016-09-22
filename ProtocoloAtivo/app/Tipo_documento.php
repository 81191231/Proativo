<?php

namespace PROATIVO;

use Illuminate\Database\Eloquent\Model;

class Tipo_documento extends Model
{
    //
    protected $fillable = ['documento','descricao'];

    public function protocolo_documento(){
    	//
    	return $this->hasMany('app/Protocolo');
    } 
}
