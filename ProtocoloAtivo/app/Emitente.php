<?php

namespace PROATIVO;

use Illuminate\Database\Eloquent\Model;

class Emitente extends Model
{
    //
    protected $fillable = ['nome', 'email','setor_id','inf_adicionais'];
}
