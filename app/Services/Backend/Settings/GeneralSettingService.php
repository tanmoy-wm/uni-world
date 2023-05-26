<?php

namespace App\Services\Backend\Settings;

use App\Http\Actions\FiltersQuery;
use App\Models\GeneralSetting;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GeneralSettingService
{
    public function destroy($id): JsonResponse
    {
        if (!$generalSetting = GeneralSetting::withTrashed()->find($id)) {
            return $this->handleError([], 'GeneralSetting Not Found.', 404);
        }

        $generalSetting->forceDeleted();

        return $this->handleResponse([], '', 200);
    }

    public function index($request): JsonResponse
    {
        $data = GeneralSetting::sorted($request->sorted_by);

        if (isset($request->q)) {
            $data = GeneralSetting::search($data, $request->q);
        }

        if ($request->filter) {
            $data = FiltersQuery::filter($data, $request);
        }
        return $this->handleResponse($data, '', 200);
    }

    public function restore($id): JsonResponse
    {
        if (!$generalSetting = GeneralSetting::withTrashed()->find($id)) {
            return $this->handleError([], 'GeneralSetting Not Found.', 404);
        }

        $restored_generalSetting = $generalSetting->restore();

        return $this->handleResponse($restored_generalSetting, 'GeneralSetting Restored Successfully.', 200);
    }

    public function show($id): JsonResponse
    {
        $generalSetting = GeneralSetting::query();

        if (!$generalSetting->withTrashed()->find($id)) {
            return $this->handleError([], 'GeneralSetting Not Found.', 404);
        }

        $data = $generalSetting->with(['createdBy', 'deletedBy', 'updatedBy'])->first();

        return $this->handleResponse($data, '', 200);
    }

    public function store($request): JsonResponse
    {
        try {
            $created_by = Auth::id();
            $validated_request = $request->validated();
            $slug = Str::slug($validated_request['slug']);

            $generalSetting = GeneralSetting::create([
                'name'            => $validated_request['name'],
                'slug'            => $slug,
                'is_active'       => $validated_request['is_active'],
                'created_by'      => $created_by,
                'updated_by'      => $created_by,
            ]);
        } catch (Exception $exception) {
            return $this->handleException($exception);
        }

        return $this->handleResponse($generalSetting, 'GeneralSetting Created Successfully.', 201);
    }

    public function trashed($id): JsonResponse
    {
        if (!$generalSetting = GeneralSetting::withTrashed()->find($id)) {
            return $this->handleError([], 'GeneralSetting Not Found.', 404);
        }

        if ($generalSetting->onlyTrashed()->find($id)) {
            return $this->handleError([], 'Selected GeneralSetting already in Trashed.', 404);
        }

        $deleted_by = Auth::id();
        $generalSetting->delete();

        $data = [
            'deleted_by' => $deleted_by,
            'is_active'  => 0
        ];

        $trashed_generalSetting = tap($generalSetting)->update($data);

        return $this->handleResponse($trashed_generalSetting, 'GeneralSetting Trashed Successfully.', 200);
    }

    public function update($request, $id): JsonResponse
    {
        if (!$generalSetting = GeneralSetting::withTrashed()->find($id)) {
            return $this->handleError([], 'GeneralSetting Not Found.', 404);
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

            $updated_generalSetting = tap($generalSetting)->update($data);
        } catch (Exception $exception) {
            return $this->handleException($exception);
        }

        return $this->handleResponse($updated_generalSetting, 'GeneralSetting Updated Successfully.', 200);
    }
}
