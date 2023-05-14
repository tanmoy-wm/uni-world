<?php

namespace App\Http\Requests\Backend\Users;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class StoreUniversityRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'              => ['required', 'string', 'max:255'],
            'username'          => ['required', 'string', 'unique:universities,username', 'max:255'],
            'email'             => ['required', 'string', 'unique:users,email', 'unique:universities,email', 'unique:admins,email', 'unique:students,email', 'max:255'],
            'password'          => ['required', 'string', 'max:16'],
            'country_code'      => ['required', 'string',  'max:255'],
            'mobile_number'     => ['required', 'string',  'max:255'],
            'alt_country_code'  => ['nullable', 'string',  'max:255'],
            'alt_mobile_number' => ['nullable', 'string',  'max:255'],
            'address'           => ['required', 'string',  'max:255'],
            'city'              => ['required', 'string',  'max:255'],
            'country'           => ['required', 'string',  'max:255'],
            'pincode'           => ['required', 'string',  'max:255'],
            'website'           => ['nullable', 'string',  'max:255'],
            'instagram'         => ['nullable', 'url'],
            'facebook'          => ['nullable', 'url'],
            'twitter'           => ['nullable', 'url'],
            'linkedin'          => ['nullable', 'url'],
            'status'            => ['required', 'string',  'max:255'],
        ];
    }
}
