<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user-email' => 'required|email',
            'user-password' => 'required|min:6',
        ];
    }

    public function messages(): array
    {
        return [
            'user-email.required' => 'O email é obrigatório',
            'user-email.email' => 'Digite um email válido',
            'user-password.required' => 'A senha é obrigatória',
            'user-password.min' => 'A senha deve ter pelo menos 6 caracteres',
        ];
    }
}
