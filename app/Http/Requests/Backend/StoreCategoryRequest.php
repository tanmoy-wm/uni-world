<?php

namespace App\Http\Requests\Backend;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class StoreCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'        => ['required', 'string', 'unique:categories,name', 'max:255'],
            'description' => ['nullable'],
            'is_active'   => ['required', 'string'],
            'parent_id'   => ['nullable', 'exists:categories,id'],
        ];
    }
}
