<?php namespace TIOp\Units\Centros\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCentrosPostRequest extends FormRequest
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
            'acronimo'      => 'required|min:5',
            'localidade'  	=> 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'nome.required'     	=> 'Campo Nome é Obrigatório!',
            'nome.min'          	=> 'O campo Nome deve ter pelo menos :min caracteres!',
            'acronomo.required'     => 'Campo Acrônimo é Obrigatório!',
            'acronomo.min'          => 'O campo Acrônimo deve ter pelo menos :min caracteres!',
            'localidade.required'   => 'Campo Localidade é Obrigatório!',
            'localidade.min'        => 'O campo Localidade deve ter pelo menos :min caracteres!',
        ];
    }
}