<?php

namespace App\Http\Requests\Backend;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class UpdateCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'      => ['required', 'string', 'unique:', 'max:255'],
            'slug'      => ['required', 'string', 'unique:', 'max:255'],
            'meta'      => ['nullable'],
            'is_active' => ['required', 'boolean',],
        ];
    }

    public function failedValidation(Validator $validator): JsonResponse
    {
        throw new HttpResponseException(response()->json([
            'success'  => false,
            'errorMsg' => 'Validation Errors.',
            'messages' => $validator->errors()->all(),
        ]), 422);
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
