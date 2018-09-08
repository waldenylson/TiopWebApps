<?php namespace TIOp\Units\BDS\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBDSPostRequest extends FormRequest
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
            'versao'      	    => 'required|min:3',
            'data_atualizacao'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'versao.required'     	=> 'Campo Versão é Obrigatório!',
            'versao.min'          	=> 'O campo versão deve ter pelo menos :min caracteres!',
            'data_atualizacao.required'  => 'Campo Data de Atualização é Obrigatório!',
        ];
    }
}