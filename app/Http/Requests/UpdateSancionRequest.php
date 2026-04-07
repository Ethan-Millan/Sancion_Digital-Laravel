<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSancionRequest extends FormRequest
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
            'alumno_id' => 'required|exists:users,id',
            'vigilante_id' => 'required|exists:users,id',
            'multa_id' => 'required|exists:multas,id',
            'descripcion' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'alumno_id.required' => 'El campo alumno es obligatorio.',
            'alumno_id.exists' => 'El alumno seleccionado no existe.',
            'vigilante_id.required' => 'El campo vigilante es obligatorio.',
            'vigilante_id.exists' => 'El vigilante seleccionado no existe.',
            'multa_id.required' => 'El campo multa es obligatorio.',
            'multa_id.exists' => 'La multa seleccionada no existe.',
            'descripcion.string' => 'La descripción debe ser una cadena de texto.',
            'descripcion.max' => 'La descripción no puede exceder los 255 caracteres.',
        ];
    }
}
