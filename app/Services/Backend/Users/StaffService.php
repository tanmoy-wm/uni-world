<?php

namespace App\Services\Backend\Users;

use App\Http\Actions\CreateUserAction;
use App\Http\Actions\UpdateUserAction;
use App\Http\Requests\Backend\Users\StoreStaffRequest;
use App\Mail\UserWelcomeMail;
use App\Models\Agent;
use App\Models\Country;
use App\Models\Staff;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;

class StaffService
{
    public function create(): View
    {
        $agents = Agent::all();
        $countries = Country::active()->get();
        return view('pages.backend.users.staff.create', compact('agents', 'countries'));
    }

    public function destroy($id)
    {
        # code...
    }

    public function edit($id)
    {
        $staff = Staff::query()->findOrFail($id);
        $agents = Agent::all();
        $countries = Country::active()->get();
        return view('pages.backend.users.staff.edit', compact('staff', 'agents', 'countries'));
    }

    public function index($request): View
    {
        $staffs = Staff::query()->with('agent')->latest()->get();
        // dd($staffs);
        return view('pages.backend.users.staff.index', compact('staffs'));
    }

    public function restore($id)
    {
        # code...
    }

    public function show($id)
    {
        # code...
    }

    public function store(StoreStaffRequest $request): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request) {
                $created_by = Auth::id();
                $validated_request = $request->validated();
                $staff = Staff::create([
                    'first_name'    => $validated_request['first_name'],
                    'middle_name'   => $validated_request['middle_name'],
                    'last_name'     => $validated_request['last_name'],
                    'email'         => $validated_request['email'],
                    'country_code'  => $validated_request['country_code'],
                    'mobile_number' => $validated_request['mobile_number'],
                    'agent_id'      => $validated_request['agent_id'],
                    'created_by'    => $created_by,
                    'updated_by'    => $created_by,
                ]);

                CreateUserAction::execute($staff, $validated_request['password']);
                Mail::to($staff->email)->send((new UserWelcomeMail($staff, $validated_request['password']))->afterCommit());
            });
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('staffs.index');
    }

    public function trashed($id): RedirectResponse
    {
        DB::transaction(function () use ($id) {
            $staff = Staff::query()->findOrFail($id);
            $staff->update(['deleted_by'  => Auth::id()]);
            $staff->user()->delete();
            $staff->delete();
        });

        return redirect()->route('staffs.index');
    }

    public function update($request, $id): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request, $id) {
                $staff = Staff::query()->findOrFail($id);
                $updated_by = Auth::id();
                $validated_request = $request->validated();

                $data = [
                    'first_name'    => $validated_request['first_name'],
                    'middle_name'   => $validated_request['middle_name'],
                    'last_name'     => $validated_request['last_name'],
                    'email'         => $validated_request['email'],
                    'country_code'  => $validated_request['country_code'],
                    'mobile_number' => $validated_request['mobile_number'],
                    'agent_id'      => $validated_request['agent_id'],
                    'updated_by'    => $updated_by,
                ];

                $staff->update($data);
                UpdateUserAction::execute($staff, $validated_request);
            });
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('staffs.index');
    }
}
