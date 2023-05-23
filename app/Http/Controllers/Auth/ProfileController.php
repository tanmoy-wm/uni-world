<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Exception;
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
            'new_password'     => ['required', 'string', 'min:8', 'max:16', 'confirmed'],
        ]);

        if (!Hash::check($validation['current_password'], $user['password'])) {
            return redirect()->back()->withErrors(['error' => 'Current password is incorrect.']);
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
        $user_type = $request->input('user_type');
        $user = Auth::user();

        if ($user->profile_type !== $user_type) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again later.']);
        }

        try {
            if ($user_type === 'App\Models\University') {
                $this->updateUniversity($request, $user);
            } elseif ($user_type === 'App\Models\Student') {
                $this->updateStudent($request, $user);
            } elseif ($user_type === 'App\Models\Agent') {
                $this->updateAgent($request, $user);
            } elseif ($user_type === 'App\Models\Staff') {
                $this->updateStaff($request, $user);
            }
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('auth.profile');
    }

    public function updateAgent($request, $user)
    {
        $validated_data = $this->validateStudent($request, $user);
        $user->profile->update($validated_data);

        $user->update([
            'first_name'  => $validated_data['first_name'],
            'middle_name' => $validated_data['middle_name'],
            'last_name'   => $validated_data['last_name'],
            'email'       => $validated_data['email'],
        ]);
    }

    public function updateStaff($request, $user)
    {
        $validated_data = $this->validateStaff($request, $user);
        $user->profile->update($validated_data);

        $user->update([
            'first_name'  => $validated_data['first_name'],
            'middle_name' => $validated_data['middle_name'],
            'last_name'   => $validated_data['last_name'],
            'email'       => $validated_data['email'],
        ]);
    }

    public function updateStudent($request, $user)
    {
        $validated_data = $this->validateStudent($request, $user);
        $user->profile->update($validated_data);

        $user->update([
            'first_name'  => $validated_data['first_name'],
            'middle_name' => $validated_data['middle_name'],
            'last_name'   => $validated_data['last_name'],
            'email'       => $validated_data['email'],
        ]);
    }

    public function updateUniversity($request, $user)
    {
        $validated_data = $this->validateUniversity($request, $user);

        $user->profile->update($validated_data);

        $user->update([
            'university_name' => $validated_data['name'],
            'email'           => $validated_data['email'],
        ]);
    }

    public function validateStaff($request, $user)
    {
        return $request->validate([
            'first_name'    => ['required', 'string'],
            'middle_name'   => ['nullable', 'string'],
            'last_name'     => ['required', 'string'],
            'email'         => ['required', 'string', 'email:rfc,dns', 'unique:universities,email', 'unique:staffs,email,' . $user->profile_id, 'unique:students,email', 'unique:users,email,' . $user->id, 'unique:agents,email'],
            'country_code'  => ['required', 'string'],
            'mobile_number' => ['required', 'numeric', 'unique:agents,mobile_number,' . $user->profile_id, 'unique:universities,mobile_number', 'unique:universities,alt_mobile_number', 'unique:student,mobile_number'],
            'agent_id'      => ['required', 'numeric', 'exists:agents,id'],
        ]);
    }

    public function validateAgent($request, $user)
    {
        return $request->validate([
            'first_name'                         => ['required', 'string'],
            'middle_name'                        => ['nullable', 'string'],
            'last_name'                          => ['required', 'string'],
            'email'                              => ['required', 'string', 'email:rfc,dns', 'unique:staffs,email', 'unique:universities,email', 'unique:agents,email,' . $user->profile_id, 'unique:students,email', 'unique:users,email,' . $user->id],
            'country_code'                       => ['required', 'string'],
            'mobile_number'                      => ['required', 'numeric', 'unique:agents,mobile_number,' . $user->profile_id, 'unique:universities,mobile_number', 'unique:universities,alt_mobile_number', 'unique:student,mobile_number'],
            'address'                            => ['required', 'string'],
            'city'                               => ['required', 'string'],
            'pincode'                            => ['required', 'numeric'],
            'state'                              => ['required', 'string'],
            'country'                            => ['required', 'string'],
            'student_source_country'             => ['nullable', 'string'],
            'business_certificate'               => ['nullable', 'string'],
            'business_logo'                      => ['nullable', 'string'],
            'preferred_contact_method'           => ['nullable', 'string'],
            'preferred_contact_method_number'    => ['nullable', 'string'],
            'how_did_you_find_about_uniwolc'     => ['nullable', 'string'],
            'in_which_year_you_start_recruiting' => ['nullable', 'string'],
            'provided_service'                   => ['nullable', 'string'],
        ]);
    }

    public function validateStudent($request, $user)
    {
        return $request->validate([
            'first_name'    => ['required', 'string'],
            'middle_name'   => ['nullable', 'string'],
            'last_name'     => ['required', 'string'],
            'email'         => ['required', 'email:dns,rfc', 'unique:universities,email', 'unique:staffs,email', 'unique:agents,email', 'unique:students,email,' . $user->profile_id, 'unique:users,email,' . $user->id],
            'country_code'  => ['required', 'string'],
            'mobile_number' => ['required', 'numeric', 'unique:agents,mobile_number', 'unique:universities,mobile_number', 'unique:universities,alt_mobile_number', 'unique:students,mobile_number,'  . $user->profile_id],
            'state'         => ['required', 'string'],
            'country'       => ['required', 'string'],
            'gender'        => ['nullable', 'string'],
            'dob'           => ['nullable', 'date_format:Y-m-d'],
        ]);
    }

    public function validateUniversity($request, $user)
    {
        return $request->validate([
            'name'                 => ['required', 'string'],
            'username'             => ['required', 'string', 'unique:universities,username,' . $user->profile_id],
            'email'                => ['required', 'string', 'email:rfc,dns', 'unique:staffs,email', 'unique:universities,email,' . $user->profile_id, 'unique:agents,email', 'unique:students,email', 'unique:users,email,' . $user->id],
            'country_code'         => ['required', 'string'],
            'mobile_number'        => ['required', 'numeric', 'unique:agents,mobile_number', 'unique:students,mobile_number', 'unique:universities,alt_mobile_number', 'unique:universities,mobile_number,' . $user->profile_id],
            'alt_country_country'  => ['nullable', 'string'],
            'alt_mobile_number'    => ['nullable', 'numeric', 'unique:agents,mobile_number', 'unique:students,mobile_number', 'unique:universities,alt_mobile_number,' . $user->profile_id],
            'address'              => ['required', 'string'],
            'city'                 => ['required', 'string'],
            'pincode'              => ['required', 'numeric'],
            'state'                => ['required', 'string'],
            'country'              => ['required', 'string'],
            'dli_number'           => ['nullable', 'string'],
            'institution_type'     => ['nullable', 'string'],
            'founded_year'         => ['nullable', 'string'],
            'why_your_institution' => ['nullable', 'string'],
            'website'              => ['nullable', 'url'],
            'linkedin'             => ['nullable', 'url'],
            'facebook'             => ['nullable', 'url'],
            'instagram'            => ['nullable', 'url'],
            'twitter'              => ['nullable', 'url'],
        ]);
    }
}
