<?php

namespace App\Services\Backend;

use App\Http\Actions\FiltersQuery;
use App\Models\Press;
use App\Services\BaseService;
use Illuminate\View\View;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;

class PressService
{
    public function destroy($id): JsonResponse
    {
        if (!$press = Press::withTrashed()->find($id)) {
            return $this->handleError([], 'Press Not Found.', 404);
        }

        $press->forceDeleted();
        return $this->handleResponse([], '', 200);
    }

    public function index(): View
    {
        $presses = Press::all();
        return view('pages.backend.press.index', compact('presses'));
    }

    public function create(): View
    {

        return view('pages.backend.press.create');
    }

    public function restore($id): JsonResponse
    {
        if (!$press = Press::withTrashed()->find($id)) {
            return $this->handleError([], 'Press Not Found.', 404);
        }

        $restored_press = $press->restore();

        return $this->handleResponse($restored_press, 'Press Restored Successfully.', 200);
    }

    public function show($id): JsonResponse
    {
        $press = Press::query();

        if (!$press->withTrashed()->find($id)) {
            return $this->handleError([], 'Press Not Found.', 404);
        }

        $data = $press->with(['createdBy', 'deletedBy', 'updatedBy'])->first();

        return $this->handleResponse($data, '', 200);
    }

    public function store($request): RedirectResponse
    {
        try {
            $created_by = Auth::id();
            $validated_request = $request->validated();
            $blog = Press::create([
                'title' => $validated_request['title'],
                'description' => $validated_request['description'],
                'given_organization' => $validated_request['given_organization'],
                'coverage_type' => $validated_request['coverage_type'],
                'award_name' => $validated_request['award_name'] ?? null,
                'is_active' => $validated_request['is_active'] === 'active' ? 1 : 0,
                'created_by' => $created_by,
                'updated_by' => $created_by,
            ]);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('press.index');
    }

    public function trashed($id): RedirectResponse
    {
        $blog = Press::query()->findOrFail($id);
        $blog->update(['deleted_by' => Auth::id()]);
        $blog->delete();
        return redirect()->route('press.index');
    }


    public function update($request, $id)
    {
        $press = Press::query()->findOrFail($id);

        try {
            $validated_request = $request->validated();
            $updated_by = Auth::id();
            $slug = Str::slug($validated_request['title']);

            $data = [
                'title' => $validated_request['title'],
                'description' => $validated_request['description'],
                'given_organization' => $validated_request['given_organization'],
                'coverage_type' => $validated_request['coverage_type'],
                'award_name' => $validated_request['award_name'] ?? null,
                'is_active' => $validated_request['is_active'] === 'active' ? 1 : 0,
                'updated_by' => $updated_by,
            ];

            $press->update($data);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('press.index');
    }

    public function edit($id): View

   {
        $press = Press::query()->findOrFail($id);
        $presses = Press::all();
        return view('pages.backend.press.edit', compact('press', 'presses'));
    }

    public function changeStatus($id): RedirectResponse
    {
        $press = Press::query()->findOrFail($id);

        return redirect()->route('press.index')->with([
            'success' => $press->update([
                'is_active' => $press->is_active === 1 ? 0 : 1,
            ]),
            'message' => $press->is_active === 1 ? 'Press Deactivated Successfully.' : 'Press Activated Successfully.',
        ]);
    }
}
