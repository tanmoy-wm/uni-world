<?php

namespace App\Http\Requests\Backend\Users;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class StoreUniversityRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'uniname'      => ['required', 'string', 'unique:', 'max:255'],
            'username'      => ['required', 'string',  'max:255'],
            'email'      => ['required', 'string',  'max:255'],
            'country_code'      => ['required', 'string',  'max:255'],
            'mobile_number'      => ['required', 'string',  'max:255'],
            'alt_country_code'      => ['required', 'string',  'max:255'],
            'alt_mobile_number'      => ['required', 'string',  'max:255'],
            'address'      => ['required', 'string',  'max:255'],
            'city '      => ['required', 'string',  'max:255'],
            'country '      => ['required', 'string',  'max:255'],
            'pincode '      => ['required', 'string',  'max:255'],
            'status '      => ['required', 'string',  'max:255'],  
        ]; 


    }



}
