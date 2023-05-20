<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user()->profile;
        return view('pages.auth.profile', compact('user'));
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $validatation = $request->validate([
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if (!Hash::check($validatation['current_password'], $user['password'])) {
            $respons_data['error'] = "Incorrect Password";
            return response()->json(['data' => $respons_data], 400);
        }

        $user->update([
            'password' => Hash::make($validatation['new_password'])
        ]);

        return redirect()->route('auth.profile');
    }
}