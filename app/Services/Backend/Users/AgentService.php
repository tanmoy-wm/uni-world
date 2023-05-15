<?php

namespace App\Services\Backend\Users;

use App\Http\Actions\CreateUserAction;
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

    public function index($request)
    {
        return view('pages.backend.users.agent.index');
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

                // dd($validated_request);
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

    public function trashed($id): JsonResponse
    {
        if (!$agent = Agent::withTrashed()->find($id)) {
            return $this->handleError([], 'Agent Not Found.', 404);
        }

        if ($agent->onlyTrashed()->find($id)) {
            return $this->handleError([], 'Selected Agent already in Trashed.', 404);
        }

        $deleted_by = Auth::id();
        $agent->delete();

        $data = [
            'deleted_by' => $deleted_by,
            'is_active'  => 0
        ];

        $trashed_agent = tap($agent)->update($data);

        return $this->handleResponse($trashed_agent, 'Agent Trashed Successfully.', 200);
    }

    public function update($request, $id): JsonResponse
    {
        if (!$agent = Agent::withTrashed()->find($id)) {
            return $this->handleError([], 'Agent Not Found.', 404);
        }

        try {
            $validated_request = $request->validated();
            $updated_by = Auth::id();
            $slug = Str::slug($validated_request['slug']);

            $data = [
                'name'            => $validated_request['name'],
                'slug'            => $slug,
                'is_active'       => $validated_request['is_active'],
                'updated_by'      => $updated_by,
            ];

            $updated_agent = tap($agent)->update($data);
        } catch (Exception $exception) {
            return $this->handleException($exception);
        }

        return $this->handleResponse($updated_agent, 'Agent Updated Successfully.', 200);
    }
}
