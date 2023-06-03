<?php

namespace App\Services\Backend\Users;

use App\Http\Actions\CreateUserAction;
use App\Http\Actions\UpdateUserAction;
use App\Http\Requests\Backend\Users\StoreAgentRequest;
use App\Http\Requests\Backend\Users\StoreStudentRequest;
use App\Mail\UserWelcomeMail;
use App\Models\Agent;
use App\Models\Country;
use App\Models\Student;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AgentService
{
    public function create(): View
    {
        $countries = Country::all();
        return view('pages.backend.users.agent.create', compact('countries'));
    }

    public function createStudent(): View
    {
        $countries = Country::all();
        return view('pages.frontend.auth.dashboard.create-student', compact('countries'));
    }

    public function dashboard()
    {
        $agent =  Auth::user()->profile;

        $countries = Country::all();

        return view('pages.frontend.auth.agent.dashboard', compact('agent', 'countries'));
    }

    public function destroy($id)
    {
        # code...
    }

    public function edit($id): View
    {
        $agent = Agent::query()->findOrFail($id);
        $countries = Country::all();
        return view('pages.backend.users.agent.edit', compact('agent', 'countries'));
    }

    public function getStudents(): View
    {
        $students = Auth::user()->profile->students()->latest()->get();
        $countries = Country::all();
        return view('pages.frontend.auth.agent.student.index', compact('students', 'countries'));
    }

    public function index($request): View
    {
        $agents = Agent::all();
        return view('pages.backend.users.agent.index', compact('agents'));
    }

    public function restore($id)
    {
        # code...
    }

    public function show($id): View
    {
        $agent = Agent::all();

        return view('pages.backend.users.agent.index', compact('agent'));
    }

    public function store(StoreAgentRequest $request): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request) {
                $created_by = Auth::id();
                $validated_request = $request->validated();

                $agent = Agent::create([
                    'first_name' => $validated_request['first_name'],
                    'middle_name' => $validated_request['middle_name'],
                    'last_name' => $validated_request['last_name'],
                    'email' => $validated_request['email'],
                    'country_code' => $validated_request['country_code'],
                    'mobile_number' => $validated_request['mobile_number'],
                    'city' => $validated_request['city'],
                    'state' => $validated_request['state'],
                    'address' => $validated_request['address'],
                    'country' => $validated_request['country'],
                    'pincode' => $validated_request['pincode'],
                    'student_source_country' => $validated_request['student_source_country'],

                    'preferred_contact_method' => $validated_request['preferred_contact_method'],
                    'preferred_contact_method_number' => $validated_request['preferred_contact_method_number'],
                    'how_did_you_find_about_uniwolc' => $validated_request['how_did_you_find_about_uniwolc'],
                    'in_which_year_you_start_recruiting' => $validated_request['in_which_year_you_start_recruiting'],
                    'provided_service' => $validated_request['provided_service'],



                    'created_by' => $created_by,
                    'updated_by' => $created_by,
                ]);

                CreateUserAction::execute($agent, $validated_request['password']);
            });
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('agents.index');
    }
    public function storeStudent(StoreStudentRequest $request): RedirectResponse
    {
        dd(1);
        try {
            $validated_request = $request->validated();
            DB::transaction(function () use ($validated_request) {
                $data = Student::create([
                    'first_name' => $validated_request['first_name'],
                    'middle_name' => $validated_request['middle_name'] ?? null,
                    'last_name' => $validated_request['last_name'],
                    'email' => $validated_request['email'],
                    'country_code' => $validated_request['country_code'],
                    'mobile_number' => $validated_request['mobile_number'],
                    'state' => $validated_request['state'] ?? null,
                    'country' => $validated_request['country'],
                    'dob' => $validated_request['dob'],
                    'passport_number' => $validated_request['passport_number'] ?? null,
                    'status' => $validated_request['status'],
                    'referral_source' => $validated_request['referral_source'],
                    'agent_accept_terms_and_service_behalf_of_student',
                    'agent_id' => Auth::user()->profile->id,
                    'assigned_to' => $validated_request['assigned_to'] ?? null,
                    'country_of_interest' => $validated_request['country_of_interest'],
                    'service_of_interest' => $validated_request['service_of_interest'],
                ]);

                $password = Str::random(8);

                CreateUserAction::execute($data, $password);
                Mail::to($data->email)->send((new UserWelcomeMail($data, $password))->afterCommit());
            });
        } catch (Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }

        return redirect()->route('auth.dashboard');
    }

    public function trashed($id): RedirectResponse
    {
        DB::transaction(function () use ($id) {
            $agent = Agent::query()->findOrFail($id);
            $agent->update(['deleted_by' => Auth::id()]);
            $agent->user->delete();
            $agent->delete();
        });

        return redirect()->route('agents.index');
    }

    public function update($request, $id): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request, $id) {
                $agent = Agent::query()->findOrFail($id);
                $updated_by = Auth::id();
                $validated_request = $request->validated();

                $data = [
                    'first_name' => $validated_request['first_name'],
                    'middle_name' => $validated_request['middle_name'],
                    'last_name' => $validated_request['last_name'],
                    'email' => $validated_request['email'],
                    'country_code' => $validated_request['country_code'],
                    'mobile_number' => $validated_request['mobile_number'],
                    'city' => $validated_request['city'],
                    'state' => $validated_request['state'],
                    'address' => $validated_request['address'],
                    'country' => $validated_request['country'],
                    'pincode' => $validated_request['pincode'],
                    'student_source_country' => $validated_request['student_source_country'],
                    'updated_by' => $updated_by,
                ];

                $agent->update($data);
                UpdateUserAction::execute($agent, $validated_request);
            });
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('agents.index');
    }
}
