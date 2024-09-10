<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SponsoringAgencyRequest extends FormRequest
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
            'project_id' => [],
            'title' => ['required'],
            'content' => ['required'],
            'years_of_experience' => ['required'],
            'simage' => ['image', 'mimes:jpeg,png,jpg', 'max:2048', Rule::requiredIf(!$this?->agency?->id)],
            'limage' => ['image', 'mimes:jpeg,png,jpg', 'max:2048', Rule::requiredIf(!$this?->agency?->id)],
        ];
    }

    public function prepareForValidation()
    {
        // $this->merge([
        //     'user_id' => auth()->id()
        // ]);
    }
}
