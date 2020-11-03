<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoStoreRequest extends FormRequest
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
            'nombre'=>'required',
            'imagen'=>'required',
            'categoria_id'=>'required',
            'precio'=>'required',
            'orden'=>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>'Campo nombre requerido',
            'imagen.required'=>'Campo imagen requerido',
            'categoria_id.required'=>'Campo categoria_id requerido',
            'precio.required'=>'Campo precio requerido',
            'orden.numeric'=>'Campo orden debe ser númerico',
            'orden.required'=>'Campo orden requerido',
        ];
    }
}
