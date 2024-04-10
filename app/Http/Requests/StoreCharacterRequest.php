<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
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
            'name' => 'required|string|max:200',
            "description" => "nullable|string",
            "strength" => "required|numeric",
            "defence" => "required|numeric",
            "intelligence" => "required|numeric",
            "speed" => "required|numeric",
            "life" => "required|numeric",
            "items" => ['required', 'exists:items,id']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome è obbligatorio',
            'name.string' => 'Il titolo deve essere una stringa',
            'name.max' => 'Il titolo deve massimo di 200 caratteri',


            'description.string' => 'La descrizione deve essere una stringa',

            'strength' => "Il campo forza è obbligatorio",
            'strength.numeric' => "Il campo forza deve essere un valore numerico",

            'defence' => "Il campo difesa è obbligatorio",
            'defence.numeric' => "Il campo difesa deve essere un valore numerico",

            'intelligence' => "Il campo intelligenza è obbligatorio",
            'intelligence.numeric' => "Il campo intelligenza deve essere un valore numerico",

            'speed' => "Il campo velocitá è obbligatorio",
            'speed.numeric' => "Il campo velocitá deve essere un valore numerico",

            'life' => "Il campo vita è obbligatorio",
            'life.numeric' => "Il campo vita deve essere un valore numerico",

            'items.required' => 'Il campo armi è obbligatorio',
            'items.exists' => 'Il campo armi inserito non è valido'
        ];
    }
}