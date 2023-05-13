<?php

namespace App\Http\Requests\Backend\Users;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class StoreAgentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'business_certificate'    => ['required', 'string', 'max:255'],
            'first_name'    => ['required', 'string', 'max:255'],
            'middle_name'   => ['nullable', 'string', 'max:255'],
            'last_name'     => ['required', 'string', 'max:255'],
            'business_logo'     => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'unique:agents,email', 'unique:users,email', 'unique:admins,email', 'unique:students,email', 'max:255'],
            'country_code'  => ['required', 'string', 'max:10'],
            'phone_number' => ['required', 'digits:10'],
            'address'         => ['required', 'string', 'max:255'],
            'city'       => ['required', 'string', 'max:255'],
            'state'   => ['nullable', 'string', 'max:255'],
            'pincode'   => ['nullable', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name field is required.',
        ];
    }
}
