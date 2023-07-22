<?php

namespace App\Http\Requests;

use App\Rules\IsAuthorized;
use Illuminate\Foundation\Http\FormRequest;

class Transaction extends FormRequest
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
    public function rules(): array
    {
        return [
            'payee_id' => 'required|exists:accounts,id',
            'payer_id' => 'required|exists:accounts,id',
            'value' => [
                'required',
                new IsAuthorized,
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'payee_id.exists' => 'Uma das contas informadas não existe.',
            'payer_id.exists' => 'Uma das contas informadas não existe.',
        ];
    }
}
