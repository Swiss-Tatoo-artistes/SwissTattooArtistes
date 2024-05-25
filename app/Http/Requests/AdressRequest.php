<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdressRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'is_main' => 'required',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'npa' => 'required|string|max:4',
            'country' => 'required|string|max:255',
            // Ajoutez d'autres règles de validation si nécessaire
        ];
    }
}
