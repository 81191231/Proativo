<?php

namespace PROATIVO;

use Illuminate\Database\Eloquent\Model;

class ArquivoComprovante extends Model
{
    //
     protected $fillable = ['produto_id','url_arquivo'];


     public function protocolo(){
     	return $this->belongsTo('app/Protocolo');
     }
}
