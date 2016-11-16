<?php namespace PROATIVO;

use Illuminate\Database\Eloquent\Model;
use PROATIVO\Tipo_documento;
use PROATIVO\Setor;
use PROATIVO\destinatario;
use PROATIVO\Emitente;
class Protocolo extends Model
{
    //
    protected $fillable = ['id','status','recebedor','data_hora_recebimento','inf_adicionais', 'motivo'];
    protected $tdocumento =['tipo_documento'=>'array'];
}
