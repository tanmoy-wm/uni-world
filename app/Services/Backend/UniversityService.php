<?php

namespace App\Services\Backend;

use App\Http\Actions\FiltersQuery;
use App\Models\University;
use App\Services\BaseService;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UniversityService 
{
    public function create($request)
    {
        return view('pages.university.create');
    }
    public function destroy($id): JsonResponse
    {
        if (!$university = University::withTrashed()->find($id)) {
            return $this->handleError([], 'University Not Found.', 404);
        }

        $university->forceDeleted();

        return $this->handleResponse([], '', 200);
    }

    public function index($request)
    {
        return view('pages.university.index');
    }

    public function restore($id): JsonResponse
    {
        if (!$university = University::withTrashed()->find($id)) {
            return $this->handleError([], 'University Not Found.', 404);
        }

        $restored_university = $university->restore();

        return $this->handleResponse($restored_university, 'University Restored Successfully.', 200);
    }

    public function show($id): JsonResponse
    {
        $university = University::query();

        if (!$university->withTrashed()->find($id)) {
            return $this->handleError([], 'University Not Found.', 404);
        }

        $data = $university->with(['createdBy', 'deletedBy', 'updatedBy'])->first();

        return $this->handleResponse($data, '', 200);
    }

    public function store($request)
    {

     
        try {
            $university = University::create([
                'name'            => $validated_request['uniname'],
                'slug'            => $slug,
                'is_active'       => $validated_request['is_active'],
                'created_by'      => $created_by,
                'updated_by'      => $created_by,
            ]);
             


        } catch (Exception $exception) {
            return back()->with('error');
        }

        return $this->handleResponse($university, 'University Created Successfully.', 201);
    }

    public function trashed($id): JsonResponse
    {
        if (!$university = University::withTrashed()->find($id)) {
            return $this->handleError([], 'University Not Found.', 404);
        }

        if ($university->onlyTrashed()->find($id)) {
            return $this->handleError([], 'Selected University already in Trashed.', 404);
        }

        $deleted_by = Auth::id();
        $university->delete();

        $data = [
            'deleted_by' => $deleted_by,
            'is_active'  => 0
        ];

        $trashed_university = tap($university)->update($data);

        return $this->handleResponse($trashed_university, 'University Trashed Successfully.', 200);
    }

    public function update($request, $id): JsonResponse
    {
        if (!$university = University::withTrashed()->find($id)) {
            return $this->handleError([], 'University Not Found.', 404);
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

            $updated_university = tap($university)->update($data);
        } catch (Exception $exception) {
            return $this->handleException($exception);
        }

        return $this->handleResponse($updated_university, 'University Updated Successfully.', 200);
    }
}
