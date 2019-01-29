<?php namespace TIOp\Units\EscalaSobreaviso\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEscalaSobreavisoPostRequest extends FormRequest
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
            'efetivo_id'    => 'required',
            'mes'    => 'required',
            'ano'    => 'required|min:4',
            'dias'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'efetivo_id.required'     => 'Código Militar é Obrigatório!',
            'mes.required'  => 'Campo Mês é Obrigatório!',
            'ano.required'  => 'Campo Ano é Obrigatório!',
            'ano.min'       => 'Ano deve conter :min dígitos',
            'dias.required' => 'Campo dias de Serviço é Obrigatório!',
        ];
    }
}