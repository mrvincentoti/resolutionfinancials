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
        $rules = [
            'status_id' => [],
            'fname' => ['required'],
            'lname' => ['required'],
            'mname' => [],
            'house_number' => [],
            'gender' => [],
            'email' => [],
            'mobile' => ['required'],
            'street' => [],
            'state' => [],
            'lga' => [],
            'account_statement' => [],
            'work_id' => [],
            'employment_letter' => [],
            'utility_bill' => [],
            'passport' => [],
            'application_form' => [],
        ];

        if ($this->isMethod('post')) {
            // Only require document on create (POST)
            $rules['account_statement'] = ['image', 'mimes:jpeg,png,jpg', 'max:2048'];
            $rules['work_id'] = ['image', 'mimes:jpeg,png,jpg', 'max:2048'];
           // $rules['employment_letter'] = ['image', 'mimes:jpeg,png,jpg', 'max:2048'];
            $rules['utility_bill'] = ['image', 'mimes:jpeg,png,jpg', 'max:2048'];
            $rules['passport'] = ['image', 'mimes:jpeg,png,jpg', 'max:2048'];
            //$rules['application_form'] = ['image', 'mimes:jpeg,png,jpg', 'max:2048'];
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
