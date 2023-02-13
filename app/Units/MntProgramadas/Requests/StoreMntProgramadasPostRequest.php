<?php namespace TIOp\Units\MntProgramadas\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMntProgramadasPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'radar_id'    => 'required',
            'efetivo_id'  => 'required',
            'motivo'      => 'required|min:10|max:37',
            'data_ini'    => 'required|',
            'data_fim'    => 'required|',
            'hora_ini'    => 'required|',
            'hora_fim'    => 'required|',
        ];
    }

    public function messages()
    {
        return [
            'radar_id.required'     => 'Campo Radar é Obrigatório!',
            'efetivo_id'          	=> 'Dados de controle faltando, acione suporte técnico!',
            'motivo.required'       => 'Campo Motivo é Obrigatório!',
            'motivo.min'            => 'Campo Motivo deve ter pelo menos :min caracteres!',
            'motivo.max'            => 'Campo Motivo pode ter até :max caracteres!',
            'data_ini.required'     => 'Campo Data Início é Obrigatório!',
            'data_fim.required'     => 'Campo Data Final é Obrigatório!',
            'hora_ini.required'     => 'Campo Hora Início é Obrigatório!',
            'hora_fim.required'     => 'Campo Hora Final é Obrigatório!',
        ];
    }
}
