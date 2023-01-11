<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|unique:projects|max:150|min:3',
            'description' => 'nullable',
            'thumb1' => 'required|image|max:250',
            'thumb2' => 'required|image|max:250',
            'technology_used' => 'required',
            'url' => 'required'

        ];
    }

    public function messages() {
        return [

            'title.required' => 'The title is obligatory',
            'title.min' => 'The title must be at least :min characters long.',
            'title.max' => 'Title cannot exceed :max characters.',
            'title.unique:projects' => 'The title already exists',
            'thumb1.required' => 'The image is obligatory',
            'thumb2.required' => 'The image is obligatory',
            'technology_used.required' => 'The name of technology used is obligatory',
            'url.required' => 'Link for the project is obligatory'

        ];

    }
}
