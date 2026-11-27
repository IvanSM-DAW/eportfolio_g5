<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EvidenciasRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'estudiante_id' => ['required', 'integer', 'min:1'],
            'tarea_id' => ['required', 'integer', 'min:1'],
            'url' => ['required', 'url', 'max:2048'],
            'descripcion' => ['required', 'string'],
            'estado_validacion' => ['required', 'in:validada,pendiente,rechazada,asignada'],
        ];
    }

    public function messages(): array
    {
        return [
            'estudiante_id.required' => 'El campo estudiante_id es obligatorio.',
            'tarea_id.required' => 'El campo tarea_id es obligatorio.',
            'url.required' => 'El campo url es obligatorio.',
            'descripcion.required' => 'El campo descripcion es obligatorio.',
            'estado_validacion.required' => 'El campo estado_validacion es obligatorio.',
        ];
    }

    
}
