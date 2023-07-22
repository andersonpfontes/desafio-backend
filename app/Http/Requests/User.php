<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class User extends FormRequest
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
            'email' => 'required|max:15',
            'email' => 'required|max:255',
            'full_name' => 'required|max:255',
            'password' => 'required',
            'phone_number' => 'required|max:16',
        ];
    }

    public function messages()
    {
        return [
            'cpf.required' => 'Preencha o campo cpf',
            'phone_number.required' => 'Preencha o campo telefone',
            'email.required' => 'Preencha o campo email',
            'email.string' => 'Preencha o campo email',

        ];
    }
}
