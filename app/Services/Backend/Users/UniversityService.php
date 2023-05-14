<?php

namespace App\Services\Backend\Users;

use App\Http\Actions\CreateUserAction;
use App\Http\Actions\UpdateUserAction;
use App\Mail\UniversityWelcomeMail;
use App\Models\University;

use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class UniversityService
{
    public function create($request)
    {
        return view('pages.backend.users.university.create');
    }
    public function destroy($id)
    {
        # code...
    }

    public function index($request): View
    {
        $universities = University::all();
        return view('pages.backend.users.university.index', ['universities' => $universities]);
    }

    public function restore($id)
    {
        # code...
    }

    public function show($id)
    {
        # code...
    }

    public function store($request): RedirectResponse
    {
        try {
            $validated_request = $request->validated();

            DB::transaction(function () use ($validated_request) {
                $data = university::create([
                    'name'              => $validated_request['name'],
                    'username'          => $validated_request['username'],
                    'email'             => $validated_request['email'],
                    'password'          => $validated_request['password'],
                    'country_code'      => $validated_request['country_code'],
                    'mobile_number'     => $validated_request['mobile_number'],
                    'alt_country_code'  => $validated_request['alt_country_code'] ?? null,
                    'alt_mobile_number' => $validated_request['alt_mobile_number'] ?? null,
                    'address'           => $validated_request['address'],
                    'city'              => $validated_request['city'],
                    'country'           => $validated_request['country'],
                    'pincode'           => $validated_request['pincode'],
                    'status'            => $validated_request['status'],
                    'website'           => $validated_request['website'] ?? null,
                    'linkedin'          => $validated_request['linkedin'] ?? null,
                    'facebook'          => $validated_request['facebook'] ?? null,
                    'instagram'         => $validated_request['instagram'] ?? null,
                    'twitter'           => $validated_request['twitter'] ?? null,
                ]);

                $user = CreateUserAction::execute($data, $validated_request['password']);

                dd($user);
                Mail::to($data->email)->send((new UniversityWelcomeMail($data, $validated_request['password']))->afterCommit());
            });
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }
        
        return redirect()->route('universities.index');
    }

    public function trashed($id): RedirectResponse
    {
        DB::transaction(function () use ($id) {
            $university = University::query()->findOrFail($id);
            $university->user->delete();
            $university->delete();
        });


        return redirect()->route('universities.index');
    }

    public function update($request, $id): RedirectResponse
    {
        try {
            $university = University::query()->findOrFail($id);
            $validated_request = $request->validated();
            $updated_by = Auth::id();

            $data = [
                'name'              => $validated_request['name'],
                'username'          => $validated_request['username'],
                'country_code'      => $validated_request['country_code'],
                'mobile_number'     => $validated_request['mobile_number'],
                'alt_country_code'  => $validated_request['alt_country_code'],
                'alt_mobile_number' => $validated_request['alt_mobile_number'],
                'address'           => $validated_request['address'],
                'city'              => $validated_request['city'],
                'country'           => $validated_request['country'],
                'pincode'           => $validated_request['pincode'],
                'status'            => $validated_request['status'],
                'website'           => $validated_request['website'],
                'linkedin'          => $validated_request['linkedin'],
                'facebook'          => $validated_request['facebook'],
                'instagram'         => $validated_request['instagram'],
                'twitter'           => $validated_request['twitter'],
            ];

            $updated_university = tap($university)->update($data);

            UpdateUserAction::execute($updated_university, $data);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong');
            }
        }

        return redirect()->route('universities.index');
    }
}
