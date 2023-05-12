<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        User::query()->update([
            'last_login_at' => now(),
            'last_login_ip' => $request->getClientIp(),
        ]);

        // dd(auth()->user()->profile_type);
        $user = Auth::user();

        // dd($user);
        if ($user->profile_type === 'App\Models\Admin') {
            return redirect()->route('admins.dashboard');
        }
    }
}
