<?php

namespace App\Services\Backend;

use App\Http\Actions\FiltersQuery;
use App\Http\Controllers\Backend\MediaController;
use App\Models\Course;
use App\Services\BaseService;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CourseService
{
    public function destroy($id): JsonResponse
    {
        if (!$course = Course::withTrashed()->find($id)) {
            return $this->handleError([], 'Course Not Found.', 404);
        }

        $course->forceDeleted();

        return $this->handleResponse([], '', 200);
    }

    public function index($request): JsonResponse
    {
        $data = Course::sorted($request->sorted_by);

        if (isset($request->q)) {
            $data = Course::search($data, $request->q);
        }

        if ($request->filter) {
            $data = FiltersQuery::filter($data, $request);
        }
        return $this->handleResponse($data, '', 200);
    }

    public function restore($id): JsonResponse
    {
        if (!$course = Course::withTrashed()->find($id)) {
            return $this->handleError([], 'Course Not Found.', 404);
        }

        $restored_course = $course->restore();

        return $this->handleResponse($restored_course, 'Course Restored Successfully.', 200);
    }

    public function show($id): JsonResponse
    {
        $course = Course::query();

        if (!$course->withTrashed()->find($id)) {
            return $this->handleError([], 'Course Not Found.', 404);
        }

        $data = $course->with(['createdBy', 'deletedBy', 'updatedBy'])->first();

        return $this->handleResponse($data, '', 200);
    }

    public function store($request): RedirectResponse
    {
        if ($request->hasFile('file')) {
            $url = '/uploads/images/courses';
            MediaController::upload($request->file, $request->name, $url);
            $image = $request->file('file');

            $a = $image->getMimeType();

            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $image_name);
        }

        // try {


        //     $created_by = Auth::id();
        //     $validated_request = $request->validated();
        //     $slug = Str::slug($validated_request['slug']);

        //     $course = Course::create([
        //         'name'            => $validated_request['name'],
        //         'slug'            => $slug,
        //         'is_active'       => $validated_request['is_active'],
        //         'created_by'      => $created_by,
        //         'updated_by'      => $created_by,
        //     ]);
        // } catch (Exception $exception) {
        //     if (app()->environment('local')) {
        //         return redirect()->back()->withErrors($exception->getMessage());
        //     } else {
        //         return redirect()->back()->withErrors('Something went wrong. Please try again later.');
        //     }
        // }

        return redirect()->route('courses.index');
    }

    public function trashed($id): JsonResponse
    {
        if (!$course = Course::withTrashed()->find($id)) {
            return $this->handleError([], 'Course Not Found.', 404);
        }

        if ($course->onlyTrashed()->find($id)) {
            return $this->handleError([], 'Selected Course already in Trashed.', 404);
        }

        $deleted_by = Auth::id();
        $course->delete();

        $data = [
            'deleted_by' => $deleted_by,
            'is_active'  => 0
        ];

        $trashed_course = tap($course)->update($data);

        return $this->handleResponse($trashed_course, 'Course Trashed Successfully.', 200);
    }

    public function update($request, $id): JsonResponse
    {
        if (!$course = Course::withTrashed()->find($id)) {
            return $this->handleError([], 'Course Not Found.', 404);
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

            $updated_course = tap($course)->update($data);
        } catch (Exception $exception) {
            return $this->handleException($exception);
        }

        return $this->handleResponse($updated_course, 'Course Updated Successfully.', 200);
    }
}
