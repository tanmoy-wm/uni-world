<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTypeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();

        // dd($user)
        if ($role == 'Admin' && $user->profile_type == 'App\Models\Admin') {
            return $next($request);
        } elseif ($role == 'Moderator' && $user->profile_type == 'App\Models\Moderator') {
            return $next($request);
        } elseif ($role == 'University' && $user->profile_type == 'App\Models\University') {
            return $next($request);
        } elseif ($role == 'Staff' && $user->profile_type == 'App\Models\Staff') {
            return $next($request);
        } elseif ($role == 'Agent' && $user->profile_type == 'App\Models\Agent') {
            return $next($request);
        } elseif ($role == 'Student' && $user->profile_type == 'App\Models\Student') {
            return $next($request);
        } else {
            return redirect()->route('auth.login');
        }
        return $next($request);
    }
}
