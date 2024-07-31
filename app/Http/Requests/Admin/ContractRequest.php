<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContractRequest extends FormRequest
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
            'redacted_ppp_agreement' => [],
            'financial_structure' => [],
            'risk' => [],
            'government_support' => [],
            'tariff' => [],
            'termination_provisions' => [],
            'renegotiations' => [],
        ];
    }

    public function prepareForValidation()
    {
        // $this->merge([
        //     'user_id' => auth()->id()
        // ]);
    }
}
