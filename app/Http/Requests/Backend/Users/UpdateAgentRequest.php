<?php

namespace App\Http\Requests\Backend\Users;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class UpdateAgentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name'             => ['required', 'string', 'max:255'],
            'middle_name'            => ['nullable', 'string', 'max:255'],
            'last_name'              => ['required', 'string', 'max:255'],
            'email'                  => ['required', 'email:rfc,dns', 'unique:agents,email,' . $this->route('id'), 'unique:users,email', 'unique:admins,email', 'unique:students,email', 'max:255'],
            'country_code'           => ['required', 'numeric'],
            'mobile_number'          => ['required', 'numeric', 'unique:agents,mobile_number,' . $this->route('id'), 'unique:students,mobile_number'],
            'address'                => ['required', 'string', 'max:255'],
            'city'                   => ['required', 'string', 'max:255'],
            'state'                  => ['required', 'string', 'max:255'],
            'country'                => ['required', 'string', 'max:255'],
            'pincode'                => ['required', 'numeric'],
            'student_source_country' => ['nullable', 'string', 'max:255'],
            'business_certificate'   => ['nullable', 'mimes:png,jpg,jpeg'],
            'business_logo'          => ['nullable', 'mimes:png,jpg,jpeg'],
        ];
    }
}
