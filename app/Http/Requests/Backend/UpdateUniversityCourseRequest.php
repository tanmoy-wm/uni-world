<?php

namespace App\Http\Requests\Backend;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class UpdateUniversityCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'duration' => ['required', 'string'],
            'apply_fees' => ['required', 'string'],
            'gross_fees' => ['required', 'string'],
            'total_sem' => ['required', 'numeric'],
            'minimum_qualification' => ['required', 'string'],
            'minimum_gpa' => ['required', 'string'],
            'minimum_language_test_score' => ['nullable', 'string'],
            'cost_of_living' => ['required', 'string'],
            'program_level' => ['required', 'string'],
            'application_open_date' => ['required', 'date_format:Y-m-d'],
            'application_deadline' => ['required', 'date_format:Y-m-d'],
            'category_id' => ['required', 'exists:categories,id'],
            'university_id' => ['required', 'exists:universities,id'],
            'is_active' => ['required', 'string'],
        ];
    }
}