<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Actions\CreateUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Users\StoreStudentRequest;
use App\Mail\UserWelcomeMail;
use App\Models\Student;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function studentRegister(StoreStudentRequest $request): RedirectResponse
    {
        try {
            $validated_request = $request->validated();

            // dd($validated_request);
            DB::transaction(function () use ($validated_request) {
                $data = Student::create([
                    'first_name'    => $validated_request['first_name'],
                    'middle_name'   => $validated_request['middle_name'],
                    'last_name'     => $validated_request['last_name'],
                    'email'         => $validated_request['email'],
                    'country_code'  => $validated_request['country_code'],
                    'mobile_number' => $validated_request['mobile_number'],
                    'state'         => $validated_request['state'],
                    'country'       => $validated_request['country'],
                    'dob'           => $validated_request['dob'],
                ]);

                CreateUserAction::execute($data, $validated_request['password']);
                Mail::to($data->email)->send((new UserWelcomeMail($data, $validated_request['password']))->afterCommit());
            });
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('frontend.login');
    }
}
