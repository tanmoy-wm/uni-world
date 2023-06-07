<?php

namespace App\Http\Requests\Backend;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class StoreCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'unique:', 'max:255'],
            'description' => ['required'],
            'slug' => ['required', 'string', 'unique:', 'max:255'],
            'meta' => ['nullable'],
            'is_active' => [
                'required',
                'boolean',
            ],
        ];
    }


}