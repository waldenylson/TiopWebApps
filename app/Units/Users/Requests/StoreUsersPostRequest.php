<?php namespace TIOp\Units\Users\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsersPostRequest extends FormRequest
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
            'nome_completo'  => 'required|min:10',
            'posto_gradu'    => 'required|min:2',
            'nome_guerra'    => 'required|min:5',
            'saram' => 'required|min:7',
            'identidade' => 'required',
            'quadro' => 'required',
            'especialidade' => 'required',
            'agenda' => 'required',
            'celular' => 'required|celular_com_ddd',
            'cpf' => 'required|cpf',
            'email' => 'required|email',
            'data_mascimento' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome_completo.required'  => 'Nome Completo é Obrigatório!',
            'nome_completo.min'  => 'Nome Completo deve ter pelo menos :min caracteres!',
            'posto_gradu.required'  => 'Posto/Graduação é Obrigatório!',
            'posto_gradu.min'  => 'Posto/Graduação deve ter pelo menos :min caracteres!',
            'nome_guerra.required'  => 'Nome de Guerra é Obrigatório!',
            'nome_guerra.min'  => 'Nome de Guerra deve ter pelo menos :min caracteres!',
            'saram.required'  => 'Saram é Obrigatório!',
            'saram.min'  => 'Saram deve ter pelo menos :min caracteres!',
            'identidade.required'  => 'Identidade é Obrigatório!',
            'quadro.required'  => 'Quadro é Obrigatório!',
            'especialidade.required'  => 'Especialidade é Obrigatório!',
            'agenda.required'  => 'Agenda é Obrigatório!',
            'celular.required'  => 'Celular é Obrigatório!',
            'celular.celular_com_ddd'  => 'Celular é deve ser estar no seguinte formato: (81) 99999-9999',
            'cpf.required'  => 'CPF é Obrigatório!',
            'cpf.cpf'  => 'Número de CPF Inválido!',
            'email.required'  => 'E-Mail é Obrigatório!',
            'email.email'  => 'Endereço de E-Mail Inválido!',
            'data_mascimento.required' => 'Data de Nascimento é Obrigatório!',
        ];
    }
}