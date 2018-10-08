<?php namespace TIOp\Units\RPL\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRPLPostRequest extends FormRequest
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
            'numero'      => 'required|min:3',
            'data_carga'  => 'required',
            'validade'    => 'required'
        ];
    }

    public function messages()
    {
        return [
            'numero.required'     	=> 'Campo Número é Obrigatório!',
            'numero.min'          	=> 'O campo número deve ter pelo menos :min caracteres!',
            'data_carga.required'   => 'Campo Data de Carga é Obrigatório!',
            'validade.required'     => 'Campo validade é Obrigatório!',
        ];
    }
}