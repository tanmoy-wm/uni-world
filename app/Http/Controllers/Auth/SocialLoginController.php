<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $existingUser = User::where('email', $user->email)->first();

            if ($existingUser) {
                auth()->login($existingUser, true);
            } else {
                // create a new user
                $student = Student::firstOrCreate([
                    'email'       => $user->email
                ], [
                    'first_name' => Str::before($user->name, ' '),
                    'last_name' => Str::after($user->name, ' '),
                ]);

                $user = $student->user()->create([
                    'first_name' => Str::before($user->name, ' '),
                    'last_name' => Str::after($user->name, ' '),
                    'social_type' => 'google',
                    'social_id' => $user->id,
                    'email' => $user->email,
                    'avatar' => $user->avatar_original
                ]);

                auth()->login($user, true);
            }
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        // check if they're an existing user

        return redirect()->route('frontend.courses');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            dd($user);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }
    }
}
