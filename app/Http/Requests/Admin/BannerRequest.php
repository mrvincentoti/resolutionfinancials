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
        return [
            'title' => ['required', 'min:12'],
            // 'top_tag' => ['required', 'min:12'],
            'short_description' => ['required', 'min:20'],
            'long_description' => ['required', 'min:20'],
            'url' => ['required'],
            'slug' => ['required', Rule::unique('banners')->ignore($this?->banner?->id)],
            'image' => ['image', 'mimes:jpeg,png,jpg', 'max:2048', Rule::requiredIf(!$this?->banner?->id)],
        ];
    }

    public function prepareForValidation()
    {
        // $this->merge([
        //     'user_id' => auth()->id()
        // ]);
    }
}
