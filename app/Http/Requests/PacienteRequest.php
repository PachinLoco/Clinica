<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
    public function rules()
    {
        return [
            'Nombre' => 'required|string|max:255',
            'Apellido' => 'required|string|max:255',
            'Edad' => 'nullable|integer|min:0',
            'Peso' => 'nullable|numeric|min:0',
            'Talla' => 'nullable|string|max:5',
            'TipoSangre' => 'nullable|string|max:5',
            'OtraInformacion' => 'nullable|string',
        ];
    }
}
