<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeStudentRequest extends FormRequest
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
            'document_number' => 'required|integer',
            'identify_document' => 'required|mimes:pdf',
            'expedition_date' => 'required:nullable|date',
            'name' => 'required|max:45',
            'first_last_name' => 'required:string|max:45',
            'birth_date' => 'required:nullable|date',
        ];
    }
}
