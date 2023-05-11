<?php

namespace App\Services\Admin;

use App\Http\Actions\FiltersQuery;
use App\Models\Admin;
use App\Services\BaseService;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminService extends BaseService
{
    public function destroy($id): JsonResponse
    {
        if (!$admin = Admin::withTrashed()->find($id)) {
            return $this->handleError([], 'Admin Not Found.', 404);
        }

        $admin->forceDeleted();

        return $this->handleResponse([], '', 200);
    }

    public function index($request): JsonResponse
    {
        $data = Admin::sorted($request->sorted_by);

        if (isset($request->q)) {
            $data = Admin::search($data, $request->q);
        }

        if ($request->filter) {
            $data = FiltersQuery::filter($data, $request);
        }
        return $this->handleResponse($data, '', 200);
    }

    public function restore($id): JsonResponse
    {
        if (!$admin = Admin::withTrashed()->find($id)) {
            return $this->handleError([], 'Admin Not Found.', 404);
        }

        $restored_admin = $admin->restore();

        return $this->handleResponse($restored_admin, 'Admin Restored Successfully.', 200);
    }

    public function show($id): JsonResponse
    {
        $admin = Admin::query();

        if (!$admin->withTrashed()->find($id)) {
            return $this->handleError([], 'Admin Not Found.', 404);
        }

        $data = $admin->with(['createdBy', 'deletedBy', 'updatedBy'])->first();

        return $this->handleResponse($data, '', 200);
    }

    public function store($request): JsonResponse
    {
        try {
            $created_by = Auth::id();
            $validated_request = $request->validated();
            $slug = Str::slug($validated_request['slug']);

            $admin = Admin::create([
                'name'            => $validated_request['name'],
                'slug'            => $slug,
                'is_active'       => $validated_request['is_active'],
                'created_by'      => $created_by,
                'updated_by'      => $created_by,
            ]);
        } catch (Exception $exception) {
            return $this->handleException($exception);
        }

        return $this->handleResponse($admin, 'Admin Created Successfully.', 201);
    }

    public function trashed($id): JsonResponse
    {
        if (!$admin = Admin::withTrashed()->find($id)) {
            return $this->handleError([], 'Admin Not Found.', 404);
        }

        if ($admin->onlyTrashed()->find($id)) {
            return $this->handleError([], 'Selected Admin already in Trashed.', 404);
        }

        $deleted_by = Auth::id();
        $admin->delete();

        $data = [
            'deleted_by' => $deleted_by,
            'is_active'  => 0
        ];

        $trashed_admin = tap($admin)->update($data);

        return $this->handleResponse($trashed_admin, 'Admin Trashed Successfully.', 200);
    }

    public function update($request, $id): JsonResponse
    {
        if (!$admin = Admin::withTrashed()->find($id)) {
            return $this->handleError([], 'Admin Not Found.', 404);
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

            $updated_admin = tap($admin)->update($data);
        } catch (Exception $exception) {
            return $this->handleException($exception);
        }

        return $this->handleResponse($updated_admin, 'Admin Updated Successfully.', 200);
    }
}
