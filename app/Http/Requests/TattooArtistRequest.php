<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TattooArtistRequest extends FormRequest
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
            // Validation of datas
            'presentation' => 'string',
            'home_phone' => '',
            'phone' => 'required',
            'facebook_sociallink' => '',
            'instagram_sociallink' => '',
            'x_sociallink' => '',
            'tiktok_sociallink' => '',
        ];
    }
}
