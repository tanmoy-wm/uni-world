<?php

namespace App\Services\Backend\Users;

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
        return view('pages.agent.create');
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
        return view('pages.agent.index');
    }

    public function restore($id): JsonResponse
    {
        if (!$agent = Agent::withTrashed()->find($id)) {
            return $this->handleError([], 'Agent Not Found.', 404);
        }

        $restored_agent = $agent->restore();

        return $this->handleResponse($restored_agent, 'Agent Restored Successfully.', 200);
    }

    public function show($id): JsonResponse
    {
        $agent = Agent::query();

        if (!$agent->withTrashed()->find($id)) {
            return $this->handleError([], 'Agent Not Found.', 404);
        }

        $data = $agent->with(['createdBy', 'deletedBy', 'updatedBy'])->first();

        return $this->handleResponse($data, '', 200);
    }

    public function store($request): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request) {
                $created_by = Auth::id();
                $validated_request = $request->validated();

                $agent = Agent::create([
                    'name'            => $validated_request['name'],
                    'created_by'      => $created_by,
                    'updated_by'      => $created_by,
                ]);
            });
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
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
