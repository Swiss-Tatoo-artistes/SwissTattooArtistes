<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpeningTimeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'opening_day' => 'required|string|max:50',
            'period' => 'required|string|in:am,pm',
            'opening_hour' => 'required|date_format:H:i:s',
            'closure_hour' => 'required|date_format:H:i:s|after:opening_hour',
            'adress_id' => 'required|exists:adresses,id',
            'tattoo_artist_id' => 'required|exists:tattoo_artists,id',
        ];
    }
}
