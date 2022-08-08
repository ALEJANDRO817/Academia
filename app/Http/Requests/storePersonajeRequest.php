<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePersonajeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
                'name' => 'required|max:10',
                'description' => 'required|max:60',
                'duration' => 'required|:3',
                'imagen¿' => 'required|image'
        ];
    }
}
