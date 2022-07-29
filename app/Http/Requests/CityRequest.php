<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|min:3|max:100',
            'country' => 'required|min:3|max:100',
            'population' => 'required|min:8|max:50',
            'about' => 'required|min:20|max:1500',
        ];
    }

    /**
     * Gestion des messages d'erreurs
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nom.required' => 'Le champ nom est obligatoire',
            'country.required' => 'Le champ country est obligatoire',
            'population.required' => 'Le champ population est obligatoire',
            'about.required' => 'Le champ about est obligatoire',
            'about.min' => 'Z',
        ];
    }
}
