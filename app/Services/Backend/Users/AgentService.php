<?php

namespace App\Services\Backend\Users;

use App\Http\Actions\CreateUserAction;
use App\Http\Actions\UpdateUserAction;
use App\Http\Requests\Backend\Users\StoreAgentRequest;
use App\Models\Agent;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AgentService
{
    public function create(): View
    {
        return view('pages.backend.users.agent.create');
    }

    public function destroy($id): JsonResponse
    {
        if (!$agent = Agent::withTrashed()->find($id)) {
            return $this->handleError([], 'Agent Not Found.', 404);
        }

        $agent->forceDeleted();
        return $this->handleResponse([], '', 200);
    }

    public function edit($id): View
    {
        $agent = Agent::query()->findOrFail($id);
        return view('pages.backend.users.agent.edit', compact('agent'));
    }

    public function index($request): View
    {
        $agents = Agent::all();
        return view('pages.backend.users.agent.index', compact('agents'));
    }

    public function restore($id): JsonResponse
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
                    'first_name'             => $validated_request['first_name'],
                    'middle_name'            => $validated_request['middle_name'],
                    'last_name'              => $validated_request['last_name'],
                    'email'                  => $validated_request['email'],
                    'country_code'           => $validated_request['country_code'],
                    'mobile_number'          => $validated_request['mobile_number'],
                    'city'                   => $validated_request['city'],
                    'state'                  => $validated_request['state'],
                    'address'                => $validated_request['address'],
                    'country'                => $validated_request['country'],
                    'pincode'                => $validated_request['pincode'],
                    'student_source_country' => $validated_request['student_source_country'],
                    'created_by'             => $created_by,
                    'updated_by'             => $created_by,
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

    public function trashed($id): RedirectResponse
    {
        DB::transaction(function () use ($id) {
            $student = Agent::query()->findOrFail($id);
            $student->user->delete();
            $student->delete();
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
                    'first_name'             => $validated_request['first_name'],
                    'middle_name'            => $validated_request['middle_name'],
                    'last_name'              => $validated_request['last_name'],
                    'email'                  => $validated_request['email'],
                    'country_code'           => $validated_request['country_code'],
                    'mobile_number'          => $validated_request['mobile_number'],
                    'city'                   => $validated_request['city'],
                    'state'                  => $validated_request['state'],
                    'address'                => $validated_request['address'],
                    'country'                => $validated_request['country'],
                    'pincode'                => $validated_request['pincode'],
                    'student_source_country' => $validated_request['student_source_country'],
                    'updated_by'             => $updated_by,
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
