<?php namespace PROATIVO;

use Illuminate\Database\Eloquent\Model;
use PROATIVO\Tipo_documento;
use PROATIVO\Setor;
class Protocolo extends Model
{
    //
    protected $fillable = ['destinatario_id','tipo_documento_id','emitente_id','setor_id','inf_adicionais'];

   	public function tipo_documento(){
    	//
    	return $this->hasMany('app/Tipo_documento');
    }
    public function setor(){
        //
        return $this->hasMany('app/Setor');
    }
}
