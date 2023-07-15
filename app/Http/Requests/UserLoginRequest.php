<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "email" => 'required|email',
            "password" => 'required|min:8'
        ];
    }

    public function messages(): array
    {
        return [
            
            'email.required' => 'Le champ email est requis',
            'email.min' => 'Le champ email doit être un mail',
            'password.required' => 'Le champ password est requis',
            'password.min' => 'Le champ password doit comporter au moins 8 caractères'
           
        ];
    }
}
