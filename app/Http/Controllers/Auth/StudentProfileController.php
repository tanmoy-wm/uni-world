<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Student\EngTestScoreRequest;
use App\Http\Requests\Auth\Student\GreAndGmatRequest;
use App\Http\Requests\Auth\StudentEducationHistoryRequest;
use App\Http\Requests\Auth\StudentVisaStudyPermitRequest;
use App\Models\Country;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class StudentProfileController extends Controller
{
    public function educationHistory(): View
    {
        $user = auth()->user()->profile;
        $countries = Country::all();

        return view('pages.auth.profile.student.education-history', compact('user', 'countries'));
    }

    public function testScore(): View
    {
        $user = auth()->user()->profile;
        $countries = Country::all();

        return view('pages.auth.profile.student.test-score', compact('user', 'countries'));
    }

    public function visaAndPermit(): View
    {
        $user = auth()->user()->profile;
        $countries = Country::all();

        return view('pages.auth.profile.student.visa-and-permit', compact('user', 'countries'));
    }

    public function updateEducationHistory(StudentEducationHistoryRequest $request)
    {
        $user = Auth::user()->profile;

        $validated_request = $request->validated();

        try {
            $data = [
                'country_of_education'       => $validated_request['country_of_education'],
                'highest_level_of_education' => $validated_request['highest_level_of_education'],
                'grading_scheme'             => $validated_request['grading_scheme'],
                'grade_average'              => $validated_request['grade_average'],
            ];

            $user->update($data);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('student.profile.education-history');
    }

    public function updateEnglishTestScore(EngTestScoreRequest $request): RedirectResponse
    {
        $user = auth()->user()->profile;

        $validated_request = $request->validated();

        try {
            $data = [
                'english_test_type'      => $validated_request['english_test_type'],
                'toefl_reading_score'    => $validated_request['toefl_reading_score'] ?? null,
                'toefl_listening_score'  => $validated_request['toefl_listening_score'] ?? null,
                'toefl_writing_score'    => $validated_request['toefl_writing_score'] ?? null,
                'toefl_speaking_score'   => $validated_request['toefl_speaking_score'] ?? null,
                'toefl_exam_date'        => $validated_request['toefl_exam_date'] ?? null,
                'ielts_reading_score'    => $validated_request['ielts_reading_score'] ?? null,
                'ielts_listening_score'  => $validated_request['ielts_listening_score'] ?? null,
                'ielts_writing_score'    => $validated_request['ielts_writing_score'] ?? null,
                'ielts_speaking_score'   => $validated_request['ielts_speaking_score'] ?? null,
                'ielts_exam_date'        => $validated_request['ielts_exam_date'] ?? null,
                'pte_reading_score'      => $validated_request['pte_reading_score'] ?? null,
                'pte_listening_score'    => $validated_request['pte_listening_score'] ?? null,
                'pte_writing_score'      => $validated_request['pte_writing_score'] ?? null,
                'pte_speaking_score'     => $validated_request['pte_speaking_score'] ?? null,
                'pte_total_score'        => $validated_request['pte_total_score'] ?? null,
                'pte_exam_date'          => $validated_request['pte_exam_date'] ?? null,
                'duolingo_total_score'   => $validated_request['duolingo_total_score'] ?? null,
                'duolingo_exam_date'     => $validated_request['duolingo_exam_date'] ?? null,
            ];

            $user->update($data);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('student.profile.test-score');
    }

    public function updateVisaAndPermit(StudentVisaStudyPermitRequest $request): RedirectResponse
    {
        $user = Auth::user()->profile;
        $validated_request = $request->validated();

        // dd($validated_request['refused_a_visa_from_canada_use_uk_nz_au_ireland']);
        try {
            $data = [
                'refused_a_visa_from_canada_use_uk_nz_au_ireland' => $validated_request['refused_a_visa_from_canada_use_uk_nz_au_ireland'] === 'Yes' ? 1 : 0,
                'study_permit_or_visa'                            => $validated_request['study_permit_or_visa'],
                'study_permit_or_visa_description'                => $validated_request['study_permit_or_visa_description'] ?? null,
            ];

            $user->update($data);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('student.profile.update-visa-and-permit');
    }
}
