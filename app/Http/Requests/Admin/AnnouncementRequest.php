<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AnnouncementRequest extends FormRequest
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
        //     'announcement_date' => ['required'],
        //     'title' => ['required'],
        //     'announcement_type_id' => [],
        //     'document' => ['image', 'mimes:jpeg,png,jpg', 'max:2048', Rule::requiredIf(!$this?->agency?->id)],
        //     'content' => [],
        // ];

        $rules = [
            'project_id' => [],
            'announcement_date' => [],
            'title' => [],
            'slug' => [],
            'announcement_type_id' => [],
            'content' => [],
        ];

        if ($this->isMethod('post')) {
            // Only require document on create (POST)
            $rules['document'] = ['image', 'mimes:jpeg,png,jpg', 'max:2048', Rule::requiredIf(!$this?->agency?->id)];
        } else {
            // Document is optional on update (PUT/PATCH)
            $rules['document'] = ['sometimes', 'image', 'mimes:jpeg,png,jpg', 'max:2048'];
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
