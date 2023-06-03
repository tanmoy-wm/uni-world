<?php

namespace App\Http\Requests\Backend\Users;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class UpdateStaffRequest extends FormRequest
{
    public function __construct(public $ignore_id = null)
    {

    }

    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation()
    {
        $this->ignore_id = User::query()->where('profile_type', 'App\Models\Staff')
                                ->where('profile_id', $this->id)->first();

    }

    public function rules(): array
    {
        return [
            'first_name'    => ['required', 'string', 'max:255'],
            'middle_name'   => ['nullable', 'string', 'max:255'],
            'last_name'     => ['required', 'string', 'max:255'],
            'country_code'  => ['required', 'string', 'max:10'],
            'mobile_number' => ['required', 'numeric'],
            'agent_id'      => ['required', 'exists:agents,id'],

            'email' => [
                'required',
                'email:rfc,dns',
                'unique:staffs,email,' . $this->route('id'),
                'unique:users,email,' . $this->ignore_id->id,
                'unique:admins,email',
                'max:255'
            ],
        ];
    }
}
