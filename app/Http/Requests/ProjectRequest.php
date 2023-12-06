<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:2|max:150',
            'explanation' => 'required|min:2|max:65535',
        ];
    }
    public function messages()
    {
        return[
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere maggiore di :min caratteri',
            'title.max' => 'Il titolo deve essere minore di :max caratteri',
            'explanation.required' => 'Il testo è obbligatorio',
            'explanation.min' => 'Il testo deve essere maggiore di :min caratteri',
            'explanation.max' => 'Il testo deve essere minore di :max caratteri',
        ];
    }
}
