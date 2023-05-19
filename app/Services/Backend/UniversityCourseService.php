<?php

namespace App\Services\Backend;

use App\Http\Requests\Backend\StoreUniversityCourseRequest;
use App\Http\Requests\Backend\UpdateUniversityCourseRequest;
use App\Http\Requests\Backend\Users\StoreUniversityRequest;
use App\Models\Category;
use App\Models\University;
use App\Models\UniversityCourse;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;

class UniversityCourseService
{
    public function changeStatus($id): RedirectResponse
    {
        $universityCourse = UniversityCourse::query()->findOrFail($id);

        return redirect()->route('university-courses.index')->with([
            'success' => $universityCourse->update([
                'is_active' => $universityCourse->is_active === 1 ? 0 : 1,
            ]),
            'message' => $universityCourse->is_active === 1 ? 'Course Deactivated Successfully.' : 'Course Activated Successfully.',
        ]);
    }

    public function create(): View
    {
        $categories = Category::all();
        $universities = University::all();

        return view('pages.backend.university-courses.create', compact('universities', 'categories'));
    }

    public function destroy($id)
    {
        # code ...
    }

    public function edit($id): View
    {
        $categories = Category::all();
        $universities = University::all();
        $universityCourse = UniversityCourse::query()->findOrFail($id);

        return view('pages.backend.university-courses.edit', compact('universityCourse', 'universities', 'categories'));
    }

    public function index($request): View
    {
        $universityCourses = UniversityCourse::query()
            ->with(['category', 'university',])
            ->get();

        return view('pages.backend.university-courses.index', compact('universityCourses'));
    }

    public function restore($id)
    {
        #code ...
    }

    public function show($id)
    {
        #code ...
    }

    public function store(StoreUniversityCourseRequest $request): RedirectResponse
    {
        try {
            $created_by = Auth::id();
            $validated_request = $request->validated();
            $slug = Str::slug($validated_request['title']);

            UniversityCourse::create([
                'title'                        => $validated_request['title'],
                'slug'                        => $slug,
                'description'                 => $validated_request['description'],
                'duration'                    => $validated_request['duration'],
                'apply_fees'                  => $validated_request['apply_fees'],
                'gross_fees'                  => $validated_request['gross_fees'],
                'total_sem'                   => $validated_request['total_sem'] ?? null,
                'minimum_qualification'       => $validated_request['minimum_qualification'],
                'minimum_gpa'                 => $validated_request['minimum_gpa'],
                'minimum_language_test_score' => $validated_request['minimum_language_test_score'] ?? null,
                'cost_of_living'              => $validated_request['cost_of_living'],
                'program_level'               => $validated_request['program_level'],
                'application_open_date'       => $validated_request['application_deadline'],
                'application_deadline'        => $validated_request['application_deadline'],
                'category_id'                 => $validated_request['category_id'],
                'university_id'               => $validated_request['university_id'],
                'is_active'                   => $validated_request['is_active']  === 'active' ? 1 : 0,
                'created_by'                  => $created_by,
                'updated_by'                  => $created_by,
            ]);
        } catch (Exception $exception) {
            // if (app()->environment('local')) {
            //     return redirect()->back()->withErrors($exception->getMessage());
            // } else {
            //     return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            // }

            return app()->environment('local') ?  redirect()->back()->withErrors($exception->getMessage()) :
                redirect()->back()->withErrors('Something went wrong. Please try again later.');
        }

        return redirect()->route('university-courses.index');
    }

    public function trashed($id): RedirectResponse
    {
        try {
            $universityCourse = UniversityCourse::query()->findOrFail($id);
            $deleted_by = Auth::id();

            $data = [
                'deleted_by' => $deleted_by,
                'is_active'  => 0
            ];

            $universityCourse->update($data);
            $universityCourse->delete();

            return redirect()->route('university-courses.index');
        } catch (Exception $exception) {
            return app()->environment('local') ?  redirect()->back()->withErrors($exception->getMessage()) :
                redirect()->back()->withErrors('Something went wrong. Please try again later.');
        }
    }

    public function update(UpdateUniversityCourseRequest $request, $id): RedirectResponse
    {
        $universityCourse = UniversityCourse::query()->findOrFail($id);

        try {
            $updated_by = Auth::id();
            $validated_request = $request->validated();
            // dd($validated_request);
            $slug = Str::slug($validated_request['title']);

            $data = [
                'title'                       => $validated_request['title'],
                'slug'                        => $slug,
                'description'                 => $validated_request['description'],
                'duration'                    => $validated_request['duration'],
                'apply_fees'                  => $validated_request['apply_fees'],
                'gross_fees'                  => $validated_request['gross_fees'],
                'total_sem'                   => $validated_request['total_sem'] ?? null,
                'minimum_qualification'       => $validated_request['minimum_qualification'],
                'minimum_gpa'                 => $validated_request['minimum_gpa'],
                'minimum_language_test_score' => $validated_request['minimum_language_test_score'] ?? null,
                'cost_of_living'              => $validated_request['cost_of_living'],
                'program_level'               => $validated_request['program_level'],
                'application_open_date'       => $validated_request['application_deadline'],
                'application_deadline'        => $validated_request['application_deadline'],
                'category_id'                 => $validated_request['category_id'],
                'university_id'               => $validated_request['university_id'],
                'is_active'                   => $validated_request['is_active']  === 'active' ? 1 : 0,
                'updated_by'                  => $updated_by,
            ];

            $universityCourse->update($data);
        } catch (Exception $exception) {
            return app()->environment('local') ?  redirect()->back()->withErrors($exception->getMessage()) :
                redirect()->back()->withErrors('Something went wrong. Please try again later.');
        }

        return redirect()->route('university-courses.index');
    }
}
