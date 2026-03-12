<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOfertaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:150',
            'vigencia' => 'required|date',
            'tienda' => 'required|string|max:100',
            'precio_original' => 'required|numeric|min:0',
            'precio_descuento' => 'required|numeric|min:0|lte:precio_original',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'El título es obligatorio.',
            'vigencia.required' => 'La vigencia es obligatoria.',
            'tienda.required' => 'La tienda es obligatoria.',
            'precio_original.required' => 'El precio original es obligatorio.',
            'precio_descuento.required' => 'El precio con descuento es obligatorio.',
            'precio_descuento.lte' => 'El precio con descuento no puede ser mayor al precio original.',
        ];
    }
}