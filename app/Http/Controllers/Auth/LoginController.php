<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request): RedirectResponse
    {

        $credentials = $request->validated();
        // dd($credentials);
        $remember_token = $request->has('remember_token') ? true : false;
        if (Auth::attempt($credentials, $remember_token)) {
            if (
                Auth::user()->profile_type === 'App\Models\Admin' &&
                Auth::user()->profile_id === 1
            ) {
                return redirect()->route('admins.dashboard');
            }
        } else {    
            return back()->withErrors(['password' => 'Wrong Credintial']);
        }
        return redirect()->route('admin.dashboard');
        
    }
}
