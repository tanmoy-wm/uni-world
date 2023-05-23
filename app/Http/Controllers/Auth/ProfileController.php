<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $validation = $request->validate([
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if (!Hash::check($validation['current_password'], $user['password'])) {
            $respons_data['error'] = "Incorrect Password";
            return response()->json(['data' => $respons_data], 400);
        }

        $user->update([
            'password' => Hash::make($validation['new_password'])
        ]);

        return redirect()->route('auth.profile');
    }

    public function editProfile()
    {
        $user = Auth::user()->profile;
        $countries = Country::all();
        return view('pages.auth.edit-profile', compact('user', 'countries'));
    }

    public function profile()
    {
        $user = Auth::user()->profile;
        return view('pages.auth.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {

        // dd();
        $user = Auth::user()->profile;
        // $validation = request()->validate([
        //     'first_name' => ['nullable', 'string'],
        //     'middle_name' => ['nullable', 'string'],
        //     'last_name' => ['nullable', 'string'],
        //     'name' => ['nullable', 'string'],
        //     'username' => ['nullable', 'string'],
        //     'country_country' => ['nullable', 'integer'],
        //     'mobile_number' => ['nullable', 'string'],
        //     'alt_country_country' => ['nullable', 'integer'],
        //     'alt_mobile_number' => ['nullable', 'string'],
        //     'address' => ['nullable', 'string'],
        //     'city' => ['nullable', 'string'],
        //     'pincode' => ['nullable', 'numeric'],
        //     'state' => ['nullable', 'string'],
        //     'country' => ['nullable', 'string'],
        // ]);

        $user_type = 'App\\Models\\User';

        if ($request->input('user_type') !== $user_type) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again later.']);
        }

        // dd(true);
        return redirect()->route('auth.profile');
    }
}
