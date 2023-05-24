<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;


class StoreCountryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'unique:countries,name', 'max:255'],
            'code' => ['required', 'string', 'unique:countries,code'],
            'dial_code' => ['required', 'string', 'unique:countries,dial_code'],
            'is_active' => ['required', 'string'],
        ];
    }


}