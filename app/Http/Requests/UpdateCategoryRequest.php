<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:categories,name,' . $this->category->id],
            'slug' => ['required', 'string', 'max:255', 'unique:categories,slug,' . $this->category->id],
            'status' => ['required', 'numeric', 'in:1,2'],
            'meta_title' => ['required', 'string', 'max:255'],
            'meta_description' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'meta_keywords' => ['required', 'string', 'max:255'],
            'photo' => ['nullable', 'image', 'max:2048', 'mimes:jpg,jpeg,png,webp'],
            'og_image' => ['nullable', 'image', 'max:2048', 'mimes:jpg,jpeg,png,webp'],
        ];
    }
}
