<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SummaryDocumentRequest extends FormRequest
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
        // return [
        //     'project_id' => [],
        //     'title' => ['required'],
        //     'image' => ['image', 'mimes:jpeg,png,jpg', 'max:2048', Rule::requiredIf(!$this?->agency?->id)],
        // ];

        $rules = [
            'project_id' => [],
            'title' => ['required'],
        ];

        if ($this->isMethod('post')) {
            // Only require document on create (POST)
            $rules['image'] = ['image', 'mimes:jpeg,png,jpg', 'max:2048', Rule::requiredIf(!$this?->agency?->id)];
        } else {
            // Document is optional on update (PUT/PATCH)
            $rules['image'] = ['sometimes', 'image', 'mimes:jpeg,png,jpg', 'max:2048'];
        }

        return $rules;
    }

    public function prepareForValidation()
    {
        // $this->merge([
        //     'user_id' => auth()->id()
        // ]);
    }
}
