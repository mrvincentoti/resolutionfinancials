<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BannerRequest extends FormRequest
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
        // Determine if the request is for updating or creating a new banner
        $isUpdate = $this->isMethod('PATCH') || $this->isMethod('PUT');

        return [
            'title' => ['required', 'min:12'],
            // If updating, allow optional description, otherwise keep required for creation
            'short_description' => [$isUpdate ? 'sometimes' : 'required', 'min:20'],
            'long_description' => [$isUpdate ? 'sometimes' : 'required', 'min:20'],
            'url' => ['required'],
            'slug' => ['required', Rule::unique('banners')->ignore($this?->banner?->id)],

            // Make 'image' required only during creation, optional during update
            'image' => ['image', 'mimes:jpeg,png,jpg', 'max:2048', Rule::requiredIf(!$isUpdate)],
        ];
    }

    public function prepareForValidation()
    {
        // $this->merge([
        //     'user_id' => auth()->id()
        // ]);
    }
}
