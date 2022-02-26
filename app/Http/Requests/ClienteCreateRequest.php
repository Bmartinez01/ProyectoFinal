<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteCreateRequest extends FormRequest
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
        'documento' => 'required|min:6|max:13|unique:clientes',
        'nombre' => 'required|min:3|max:20',
        'apellido' => 'required|min:4|max:50',
        'direccion' => 'required|min:7|max:50',
        'telefono' => 'required|min:4|max:50',
        'email'=> 'required|email|unique:clientes',
        'estado' => 'nullable'
        ];
    }
}
