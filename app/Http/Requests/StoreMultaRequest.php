<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreMultaRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre_falta' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'monto' => 'required|numeric|min:0'
        ];
    }
}
