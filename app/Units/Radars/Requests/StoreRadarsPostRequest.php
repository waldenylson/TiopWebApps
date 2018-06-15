<?php namespace TIOp\Units\Radars\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRadarsPostRequest extends FormRequest
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
            'localidade'   	=> 'required|min:5',
            'equipamento'  	=> 'required|min:5',
            'canalizacao'  	=> 'required',
            'protocolo'   	=> 'required|min:5',
            'sic'       	=> 'required',
            'tipo'       	=> 'required',
            'canal_a'       => 'required',
            'canal_b'       => 'required',
            'lat'       	=> 'required',
            'long'       	=> 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required'     	=> 'Campo Nome é Obrigatório!',
            'nome.min'          	=> 'O campo Nome deve ter pelo menos :min caracteres!',
            'localidade.required'   => 'Campo Localidade é Obrigatório!',
            'localidade.min'        => 'O campo Localidade deve ter pelo menos :min caracteres!',
            'equipamento.required'  => 'Campo Equipamento é Obrigatório!',
            'equipamento.min'       => 'O campo Equipamento deve ter pelo menos :min caracteres!',
            'canalizacao.required' 	=> 'Campo Canalização é Obrigatório!',
            'protocolo.required'    => 'Campo Protocolo é Obrigatório!',
            'protocolo.min'         => 'O campo Protocolo deve ter pelo menos :min caracteres!',
            'sic.required'	        => 'Campo SIC é Obrigatório!',
            'tipo.required'	        => 'Campo Tipo é Obrigatório!',
            'canal_a.required'      => 'Campo Canal-A é obrigatório!',
            'canal_b.required'      => 'Campo Canal-B é obrigatório!',
            'lat.required'	        => 'Campo LAT é Obrigatório!',
            'long.required'	        => 'Campo LONG é Obrigatório!',
        ];
    }
}