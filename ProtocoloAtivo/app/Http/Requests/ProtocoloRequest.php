<?php

namespace App\Http\Requests;

use App\Http\Requests;

class ProtocoloRequest extends Request{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ['status' => 'required','emitente_id' => 'required','destinatario_id' => 'required',
        'tipo_documento_id' => 'required','setor_id' => 'required','inf_adicionais' => 'required'
        ];
    }
}
