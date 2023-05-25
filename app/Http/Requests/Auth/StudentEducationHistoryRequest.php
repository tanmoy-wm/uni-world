<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StudentEducationHistoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'country_of_education'       => ['required', 'string'],
            'highest_level_of_education' => ['required', 'string'],
            'grading_scheme'             => ['required', 'string'],
            'grade_average'              => ['required', 'numeric'],
        ];
    }
}
