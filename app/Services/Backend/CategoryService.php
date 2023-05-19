<?php

namespace App\Services\Backend;

use App\Http\Requests\Backend\StoreCategoryRequest;
use App\Http\Requests\Backend\UpdateCategoryRequest;
use App\Models\Category;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CategoryService
{
    public function create(): View
    {
        $categories = Category::all();
        return view('pages.backend.category.create', compact('categories'));
    }

    public function changeStatus($id): RedirectResponse
    {
        $category = Category::query()->findOrFail($id);

        return redirect()->route('categories.index')->with([
            'success' => $category->update([
                'is_active' => $category->is_active === 1 ? 0 : 1,
            ]),
            'message' => $category->is_active === 1 ? 'Category Deactivated Successfully.' : 'Category Activated Successfully.',
        ]);
    }

    public function destroy($id)
    {
        # code...
    }

    public function edit($id): View
    {
        $category = Category::query()->findOrFail($id);
        $categories = Category::all();
        return view('pages.backend.category.edit', compact('category', 'categories'));
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

    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $created_by = Auth::id();
        $validated_request = $request->validated();
        $slug = Str::slug($validated_request['name']);

        try {
            Category::create([
                'name'        => $validated_request['name'],
                'slug'        => $slug,
                'description' => $validated_request['description'] ?? null,
                'parent_id'   => $validated_request['parent_id'] ?? null,
                'is_active'   => $validated_request['is_active'] === 'active' ? 1 : 0,
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

        return redirect()->route('categories.index');
    }

    public function trashed($id): RedirectResponse
    {
        $category = Category::query()->findOrFail($id);
        $category->update(['deleted_by'  => Auth::id()]);
        $category->delete();

        return redirect()->route('categories.index');
    }

    public function update(UpdateCategoryRequest $request, $id): RedirectResponse
    {
        $category = Category::query()->findOrFail($id);

        try {
            $validated_request = $request->validated();
            $updated_by = Auth::id();
            $slug = Str::slug($validated_request['name']);

            $data = [
                'name'        => $validated_request['name'],
                'slug'        => $slug,
                'description' => $validated_request['description'] ?? null,
                'parent_id'   => $validated_request['parent_id'] ?? null,
                'is_active'   => $validated_request['is_active'] === 'active' ? 1 : 0,
                'updated_by'  => $updated_by,
            ];

            $category->update($data);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('categories.index');
    }
}
