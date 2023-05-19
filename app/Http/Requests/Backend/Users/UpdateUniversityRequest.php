<?php

namespace App\Http\Requests\Backend\Users;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUniversityRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'              => ['required', 'string', 'max:255'],
            'username'          => ['required', 'string', 'unique:universities,username,' . $this->route('id')],
            'country_code'      => ['required', 'string'],
            'mobile_number'     => ['required', 'numeric'],
            'alt_country_code'  => ['nullable', 'string',  'max:255'],
            'alt_mobile_number' => ['nullable', 'numeric', 'unique:universities,username,' . $this->route('id'),],
            'address'           => ['required', 'string',  'max:255'],
            'city'              => ['required', 'string',  'max:255'],
            'state'             => ['required', 'string',  'max:255'],
            'country'           => ['required', 'string',  'max:255'],
            'pincode'           => ['required', 'string',  'max:255'],
            'website'           => ['nullable', 'url', 'max:255'],
            'instagram'         => ['nullable', 'url'],
            'facebook'          => ['nullable', 'url'],
            'twitter'           => ['nullable', 'url'],
            'linkedin'          => ['nullable', 'url'],
            'status'            => ['required', 'string',  'max:255'],
        ];
    }
}
