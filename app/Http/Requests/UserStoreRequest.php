<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'password'=>'required',
            'nombres'=>'required',
            'password_confirm'=>'required_with:password|same:password',
            'username'=>'required|unique:users,username',
            'email'=>'required|unique:users,email',
        ];
    }

    public function messages()
    {
        return [
            'username.required'=>'Campo Usuario requerido',
            'nombres.required'=>'Campo nombres requerido',
            'email.required'=>'Campo Email requerido',
            'password.required'=>'Contraseña requerida',
            'password_confirm.same'=>'Las contraseñas no coinciden',
            'password_confirm.required_with'=>'la confirmación de contraseña es obligatoria para cambiar la contraseña',
            'username.unique' => 'El usuario ya se encuentra registrado',
            'email.unique' => 'El correo ya se encuentra registrado',
        ];
    }
}
