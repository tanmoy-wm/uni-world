<?php

namespace App\Http\Requests\Backend\Users;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class UpdateStaffRequest extends FormRequest
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
            'email'         => ['required', 'string', 'unique:users,email', 'unique:agents,email', 'unique:admins,email', 'unique:students,email', 'unique:staffs,email,' . $this->route('id'), 'max:255'],
            'country_code'  => ['required', 'string', 'max:10'],
            'mobile_number' => ['required', 'numeric'],
            'agent_id'      => ['required', 'exists:agents,id'],
        ];
    }
}
