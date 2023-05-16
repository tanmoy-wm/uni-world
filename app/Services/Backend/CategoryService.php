<?php

namespace App\Services\Backend;

use App\Http\Actions\FiltersQuery;
use App\Models\Category;
use App\Services\BaseService;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CategoryService
{
    public function destroy($id)
    {
        # code...
    }

    public function index($request): View
    {
        $categories = Category::all();
        return view('pages.backend.category.index', compact('categories'));
    }

    public function restore($id)
    {
        # code...
    }

    public function show($id)
    {
        # code...
    }

    public function store($request): RedirectResponse
    {
        try {
            $created_by = Auth::id();
            $validated_request = $request->validated();

            $agent = Category::create([
                'name'        => $validated_request['name'],
                'description' => $validated_request['description'],
                'parent_id'   => $validated_request['parent_id'],
                'is_active'   => $validated_request['is_active'],
                'created_by'  => $created_by,
                'updated_by'  => $created_by,
            ]);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }
    }

    public function trashed($id): RedirectResponse
    {

        $category = Category::query()->findOrFail($id);
        $category->update(['deleted_by'  => Auth::id()]);
        $category->delete();

        return redirect()->route('categories.index');
    }

    public function update($request, $id): JsonResponse
    {
        if (!$category = Category::withTrashed()->find($id)) {
            return $this->handleError([], 'Category Not Found.', 404);
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

            $updated_category = tap($category)->update($data);
        } catch (Exception $exception) {
            return $this->handleException($exception);
        }

        return $this->handleResponse($updated_category, 'Category Updated Successfully.', 200);
    }
}
