<?php namespace TIOp\Units\Sistemas\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSistemasPostRequest extends FormRequest
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
            'nome'      	=> 'required|min:3',
            'versao'   	    => 'required|min:5',
            'descricao'  	=> 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'nome.required'     	=> 'Campo Nome é Obrigatório!',
            'nome.min'          	=> 'O campo Nome deve ter pelo menos :min caracteres!',
            'versao.required'       => 'Campo Versão é Obrigatório!',
            'versao.min'            => 'O campo Versão deve ter pelo menos :min caracteres!',
            'descricao.required'    => 'Campo Descrição é Obrigatório!',
            'descricao.min'         => 'O campo Descrição deve ter pelo menos :min caracteres!',
        ];
    }
}