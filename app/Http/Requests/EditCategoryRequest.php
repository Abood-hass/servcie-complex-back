<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category-name-en' => 'nullable|min:3',
            'category-name-ar' => 'nullable|min:3',

            'category-description-en' => 'nullable|min:5|max:125|string',
            'category-description-ar' => 'nullable|min:5|max:125|string',
        ];
    }
}
