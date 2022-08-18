<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeTeacherRequest extends FormRequest
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
                'name' => 'required|max:50',
                'Lastname' => 'required|max:45',
                'colelle_degree' => 'required|:50',
                'age' => 'required|size:2',
                'contract_date' => 'required:nullable|date',
                'imagen' => 'required|file|max:5120',
                'identity_document' => 'required'


        ];
    }
}
