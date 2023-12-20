<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email:rfc|min:10|max:50|unique:usuarios',
            'username' => 'required|min:5|max:20|unique:usuarios',
            'password1' => 'bail|required|min:6|max:40'
        ];
    }

    public function messages():array{
        return [
            'email.required' => 'Necesitas indicar tu email',
            'email.unique' => 'Este email ya está en uso',
            'email.min' => 'Minimo 10 cáracteres para el mail',
            'email.max' => 'Máximo 50 cáracteres para el mail',
            'username.required' => 'Necesitas indicar tu nombre de usuario',
            'username.unique' => 'Este nombre de usuario ya está en uso',
            'username.min' => 'Minimo 5 cáracteres para el nombre de usuario',
            'username.max' => 'Máximo 20 cáracteres para el nombre de usuario',
            'password1.required' => 'Necesitas indicar tu contraseña',
            'password1.min' => 'Minimo 6 cáracteres para la contraseña',
            'password1.max' => 'Máximo 40 cáracteres para la contraseña',
        ];
    }
}
