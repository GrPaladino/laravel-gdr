<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:30',
            'img' => 'required|string|max:1024',
            'description' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Il titolo è obbligatorio',
            'name.string' => 'La lunghezza non deve superare i 30 caratteri',

            'img' => 'Il titolo è obbligatorio',
            'img.string' => 'La lunghezza non deve superare i 1024 caratteri',

            'description' => 'Il titolo è obbligatorio',



        ];
    }
}