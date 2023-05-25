<?php

namespace App\Http\Requests\Auth\Student;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class GreAndGmatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'is_gmat'                => ['required', 'string'],
            'gmat_total_score'       => ['required', 'string'],
            'gmat_rank'              => ['required_if:is_gmat,on', 'string'],
            'gmat_verbal'            => ['required_if:is_gmat,on', 'string'],
            'gmat_verbal_rank'       => ['required_if:is_gmat,on', 'string'],
            'gmat_quantitative'      => ['required_if:is_gmat,on', 'string'],
            'gmat_quantitative_rank' => ['required_if:is_gmat,on', 'string'],
            'gmat_awa'               => ['required_if:is_gmat,on', 'string'],
            'gmat_awa_rank'          => ['required_if:is_gmat,on', 'string'],
            'date_of_gmat_exam'      => ['required_if:is_gmat,on', 'date_format:Y-m-d'],
            'is_gre'                 => ['required', 'string'],
            'gre_total_score'        => ['required_if:is_gre,on', 'string'],
            'gre_rank'               => ['required_if:is_gre,on', 'string'],
            'gre_verbal'             => ['required_if:is_gre,on', 'string'],
            'gre_verbal_rank'        => ['required_if:is_gre,on', 'string'],
            'gre_quantitative'       => ['required_if:is_gre,on', 'string'],
            'gre_quantitative_rank'  => ['required_if:is_gre,on', 'string'],
            'gre_awa'                => ['required_if:is_gre,on', 'string'],
            'gre_awa_rank'           => ['required_if:is_gre,on', 'string'],
            'date_of_gre_exam'       => ['required_if:is_gre,on', 'date_format:Y-m-d'],
        ];
    }
}
