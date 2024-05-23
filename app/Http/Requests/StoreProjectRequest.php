<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'type_id' => 'nullable|exists:types,id',
            'project_name' => 'required|min:5|max:50|unique:projects',
            'slug' => 'nullable',
            'description' => 'nullable|max:200',
            'preview_image' => 'nullable|max:255',
            'link_view' => 'nullable|max:255',
            'link_code' => 'nullable|max:255',
        ];
    }
}
