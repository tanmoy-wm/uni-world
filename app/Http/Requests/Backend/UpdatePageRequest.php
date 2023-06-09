<?php

namespace App\Http\Requests\Backend;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class UpdatePageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'meta_description' => ['required'],
            'external_link' => ['nullable', 'url'],
            'meta_title' => ['required', 'string', 'max:255'],
            'meta_description' => ['required'],
            'thumbnail' => ['nullable'],
            'key_word' => ['required'],
            'is_active' => ['required', 'string'],
        ];
    }
}
