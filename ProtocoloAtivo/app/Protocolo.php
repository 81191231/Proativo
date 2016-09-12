<?php namespace PROATIVO;

use Illuminate\Database\Eloquent\Model;
use PROATIVO\Tipo_documento;
class Protocolo extends Model
{
    //
    protected $fillable = ['destinatario_id','tipo_documento_id','emitente_id','inf_adicionais'];

    public function protocoloComprovante(){
    	//
    	return $this->hasMany('app/ArquivoComprovante');
    } 
   	public function tipo_documento(){
    	//
    	return $this->hasMany('app/Tipo_documento');
    }
    public function destinatario(){

        //return $this->
    }
}
