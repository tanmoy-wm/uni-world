<?php

namespace App\Http\Requests\Auth\Student;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class StoreStudentPreferncesRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'preferred_countries'         => ['required', 'array', 'min:1'],
            'applying_education_levels'   => ['required', 'array', 'min:1'],
            'preferred_stream'            => ['required', 'array', 'min:1'],
            'preferred_month_of_starting' => ['required', 'array', 'min:1'],
            'budget'                      => ['required', 'string', 'max:255'],
            'nationality'                 => ['required', 'string', 'max:255'],
            'current_country'             => ['required', 'string', 'max:255'],
            'standardized_tests_taken'    => ['required', 'string', 'max:255'],
            'education_status'            => ['required', 'string', 'max:255'],
            'education_level'             => ['required', 'string', 'max:255'],
            'degree'                      => ['required', 'string', 'max:255'],
            'english_test_type'           => ['required', 'string'],
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
