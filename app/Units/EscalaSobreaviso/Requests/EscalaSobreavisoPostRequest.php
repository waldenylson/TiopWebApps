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
            'radar_id'    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'radar_id.required'     => 'Campo Radar é Obrigatório!',
        ];
    }
}