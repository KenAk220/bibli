<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateFormRequest extends FormRequest
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
            "nom" => 'required|min:2',
            "prenom" => 'required|min:2',
            "pays" => 'required|min:3',
            "email" => 'required|email',
            "password" => 'required|min:8',
            "confirm" => 'required|min:8|same:password',
            "checkbox" => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => 'Le champ nom est requis',
            'nom.min' => 'Le champ nom doit comporter au moins 2 caractères',
            'prenom.required' => 'Le champ prenom est requis',
            'prenom.min' => 'Le champ prenom doit comporter au moins 2 caractères',
            'pays.required' => 'Le champ pays est requis',
            'pays.min' => 'Le champ pays doit comporter au moins 3 caractères',
            'email.required' => 'Le champ email est requis',
            'email.min' => 'Le champ email doit être un mail',
            'password.required' => 'Le champ password est requis',
            'password.min' => 'Le champ password doit comporter au moins 8 caractères',
            'confirm.required' => 'Le champ confirmation du password est requis',
            'confirm.min' => 'Le champ confirmation du password doit comporter au moins 8 caractères',
            'confirm.same' => 'La confirmation du password doit être identique au password',
            'checkbox.required' => 'Tous les champs sont requis'
        ];
    }
}
