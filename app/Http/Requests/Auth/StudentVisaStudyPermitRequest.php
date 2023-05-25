<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StudentVisaStudyPermitRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'refused_a_visa_from_canada_use_uk_nz_au_ireland' => ['required', 'string'],
            'study_permit_or_visa'                            => ['required', 'string'],
            'study_permit_or_visa_description'                => ['string', 'required'],
        ];
    }
}
