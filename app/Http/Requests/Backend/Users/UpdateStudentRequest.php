<?php

namespace App\Http\Requests\Backend\Users;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class UpdateStudentRequest extends FormRequest
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
        $this->ignore_id = User::query()->where('profile_type', 'App\Models\Student')
                                ->where('profile_id', $this->id)->first();

    }

    public function rules(): array
    {
        return [
            'first_name'    => ['required', 'string', 'max:255'],
            'middle_name'   => ['nullable', 'string', 'max:255'],
            'last_name'     => ['required', 'string', 'max:255'],
            'country_code'  => ['required', 'string', 'max:10'],
            'state'         => ['required', 'string', 'max:255'],
            'country'       => ['required', 'string', 'max:255'],
            'dob'           => ['required', 'date_format:Y-m-d'],
            'mobile_number' => [
                'required',
                'digits:10',
                'unique:students,mobile_number,' . $this->route('id'),
            ],
            'email' => [
                'required',
                'email:rfc,dns',
                'unique:students,email,' . $this->route('id'),
                'unique:users,email,' . $this->ignore_id->id,
                'unique:admins,email',
                'max:255'
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name field is required.',
            'slug.required' => 'Slug field is required.',
            'slug.unique'   => 'Sorry, this Slug is already Exists.',
        ];
    }
}
