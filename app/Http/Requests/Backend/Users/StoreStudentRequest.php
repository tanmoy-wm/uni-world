<?php

namespace App\Http\Requests\Backend\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name'    => ['required', 'string', 'max:255'],
            'middle_name'   => ['nullable', 'string', 'max:255'],
            'last_name'     => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'unique:users,email', 'unique:admins,email', 'unique:students,email', 'max:255'],
            'country_code'  => ['required', 'string', 'max:10'],
            'mobile_number' => ['required', 'digits:10'],
            'state'         => ['required', 'string', 'max:255'],
            'country'       => ['required', 'string', 'max:255'],
            'dob'           => ['required', 'date_format:Y-m-d'],
            'password'      => ['required', 'string', 'min:8', 'max:16', 'confirmed'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name field is required.',
        ];
    }
}
