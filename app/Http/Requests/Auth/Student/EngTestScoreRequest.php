<?php

namespace App\Http\Requests\Auth\Student;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class EngTestScoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        // dd($this->request->all());
        return [
            'english_test_type'      => ['required'],
            'toefl_reading_score'    => ['required_if:english_test_type,TOEFL'],
            'toefl_listening_score'  => ['required_if:english_test_type,TOEFL'],
            'toefl_writing_score'    => ['required_if:english_test_type,TOEFL'],
            'toefl_speaking_score'   => ['required_if:english_test_type,TOEFL'],
            'toefl_exam_date'        => ['required_if:english_test_type,TOEFL'],
            'ielts_reading_score'    => ['required_if:english_test_type,IELTS'],
            'ielts_listening_score'  => ['required_if:english_test_type,IELTS'],
            'ielts_writing_score'    => ['required_if:english_test_type,IELTS'],
            'ielts_speaking_score'   => ['required_if:english_test_type,IELTS'],
            'ielts_exam_date'        => ['required_if:english_test_type,IELTS'],
            'pte_reading_score'      => ['required_if:english_test_type,PTE'],
            'pte_listening_score'    => ['required_if:english_test_type,PTE'],
            'pte_writing_score'      => ['required_if:english_test_type,PTE'],
            'pte_speaking_score'     => ['required_if:english_test_type,PTE'],
            'pte_total_score'        => ['required_if:english_test_type,PTE'],
            'pte_exam_date'          => ['required_if:english_test_type,PTE'],
            'duolingo_total_score'   => ['required_if:english_test_type,Duolingo'],
            'duolingo_exam_date'     => ['required_if:english_test_type,Duolingo'],
        ];
    }
}
