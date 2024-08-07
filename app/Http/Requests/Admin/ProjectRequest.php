<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProjectRequest extends FormRequest
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
            'project_title' => ['required'],
            'sector_id' => [],
            'phase_id' => [],
            'lga_id' => [],
            'location' => [],
            'value' => [],
            'last_update' => [],
            'project_need' => [],
            'description_of_asset' => [],
            'description_of_service' => [],
            'rationale_for_selection' => [],
            'stakeholder_consultations' => [],
            'slug' => ['required', Rule::unique('projects')->ignore($this?->project?->id)],
            'supervising_authority' => [],
            'screening_report' => [],
        ];
    }

    public function prepareForValidation()
    {
        // $this->merge([
        //     'user_id' => auth()->id()
        // ]);
    }
}
