<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoriaClinicaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'DNI_Paciente' => 'required|exists:pacientes,DNI',
            'FechaConsulta' => 'required|date',
            'Diagnostico' => 'required|string',
            'Tratamiento' => 'required|string',
        ];
    }
}
