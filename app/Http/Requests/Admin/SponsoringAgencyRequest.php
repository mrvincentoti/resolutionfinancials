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

        $isUpdate = $this->isMethod('PATCH') || $this->isMethod('PUT');

        return [
            'project_id' => [],
            'title' => ['required'],
            'top_tag' => [$isUpdate ? 'sometimes' : 'required'],
            'image' => ['image', 'mimes:jpeg,png,jpg', 'max:2048', Rule::requiredIf(!$this?->agency?->id)],
            'short_description' => [$isUpdate ? 'sometimes' : 'required', 'min:20'],
            'description' => [$isUpdate ? 'sometimes' : 'required', 'min:20'],
            'point_one' => [$isUpdate ? 'sometimes' : 'required'],
            'point_two' => [$isUpdate ? 'sometimes' : 'required'],
            'point_three' => [$isUpdate ? 'sometimes' : 'required'],
            'point_four' => [$isUpdate ? 'sometimes' : 'required'],
        ];
    }

    public function prepareForValidation()
    {
        // $this->merge([
        //     'user_id' => auth()->id()
        // ]);
    }
}
