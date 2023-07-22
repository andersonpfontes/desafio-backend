<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Seller extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
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
            'user_id' => 'required',
            'username' => 'required',
            'cnpj' => 'required',
            'fantasy_name' => 'required',
            'social_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'O id do usuário deve ser informado',
            'username.required' => 'Preencha o campo username',
            'phone.required' => 'Preencha o campo Telefone',
            'cnpj.required' => 'Preencha o campo de CNPJ',
            'fantasy_name.required' => 'Preencha o campo Nome fantasia',
            'social_name.required' => 'Preencha o campo Nome social',
        ];
    }
}
