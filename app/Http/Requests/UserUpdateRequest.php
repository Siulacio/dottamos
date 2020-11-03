<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'username'=>'required|unique:users,username,'.$this->id,
            'nombres'=>'required',
            'email'=>'required|unique:users,email,'.$this->id,
            'password_confirm'=>'required_with:password|same:password',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Usuario requerido',
            'username.unique' => 'El usuario '.$this->username.' ya se encuentra registrado',
            'nombres.required' => 'Nombres requerido',
            'email.required' => 'Correo requerido',
            'email.unique' => 'El correo '.$this->email.' ya se encuentra registrado',
            'password_confirm.same'=>'Las contraseñas no coinciden',
            'password_confirm.required_with'=>'la confirmación de contraseña es obligatoria para cambiar la contraseña',
        ];
    }
}
