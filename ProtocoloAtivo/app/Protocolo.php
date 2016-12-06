<?php namespace PROATIVO;

use Illuminate\Database\Eloquent\Model;
use PROATIVO\Tipo_documento;
use PROATIVO\Setor;
use PROATIVO\destinatario;
use PROATIVO\Emitente;
class Protocolo extends Model
{
    //
    protected $fillable = ['status','recebedor','data_hora_recebimento','motivo','anexo_comprovante', 'user_id','tipo_documento','destinatario_id'];
    //

    public function tipo_documentos(){
          return $this->belongsToMany('PROATIVO\Tipo_documento');
    }
    //
    public function destinatario(){
        return $this->belongsTo('PROATIVO\destinatario');
    }

    public function user(){
        return $this->belongsTo('PROATIVO\User');
    }
    
}