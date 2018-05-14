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
            'versao'      	=> 'required|min:3',
            'last_update'      => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'versao.required'     	=> 'Campo Versão é Obrigatório!',
            'versao.min'          	=> 'O campo versão deve ter pelo menos :min caracteres!',
            'last_update.required'  => 'Campo Acrônimo é Obrigatório!',
        ];
    }
}