<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteEditRequest extends FormRequest
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
        $cliente = $this->route('cliente');
        return [
            'nombre' => ['required','min:3','max:20'],
            'documento' => ['required','min:6','max:13','unique:clientes,documento,' . request()->route('cliente')->id],
            'apellido' => ['required','min:4','max:50'],
            'direccion' => ['required','min:7','max:50'],
            'telefono' => ['required','min:4','max:20'],
            'email'=> ['required','unique:clientes,email,' . request()->route('cliente')->id],
            'estado' => ['nullable']
        ];
    }
}
