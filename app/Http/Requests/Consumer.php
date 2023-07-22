<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Consumer extends FormRequest
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
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'O id do usuário deve ser informado',
            'username.required' => 'Preencha o campo username',
        ];
    }

}
