<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Actions\CreateUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Users\StoreStudentRequest;
use App\Mail\UserWelcomeMail;
use App\Models\Student;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function login($credentials): string | RedirectResponse
    {
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->profile_type === 'App\Models\Admin') {
                return 'admins.dashboard';
            } elseif (Auth::user()->profile_type === 'App\Models\Student') {
                return 'frontend.courses';
            }
        } else {
            return back()->withErrors(['password' => 'Wrong Credentials']);
        }
    }

    public function studentRegister(StoreStudentRequest $request)
    {
        try {
            $validated_request = $request->validated();

            $redirect_url = DB::transaction(function () use ($validated_request) {
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

                $credentials = [
                    'email'    => $validated_request['email'],
                    'password' => $validated_request['password'],
                ];

                return $redirect_url =  $this->login($credentials);
            });
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route($redirect_url);
    }
}
