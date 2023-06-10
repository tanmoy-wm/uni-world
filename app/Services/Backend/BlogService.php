<?php

namespace App\Services\Backend;

use App\Http\Requests\Backend\UpdateBlogRequest;
use App\Models\Blog;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BlogService
{
    public function destroy($id): JsonResponse
    {
        if (!$blog = Blog::withTrashed()->find($id)) {
            return $this->handleError([], 'Blog Not Found.', 404);
        }
        $blog->forceDeleted();
        return $this->handleResponse([], '', 200);
    }

    public function index(): View
    {
        $blogs = Blog::latest()->get();
        return view('pages.backend.blog.index', compact('blogs'));
    }


    public function create(): View
    {
        $blog = Blog::all();
        return view('pages.backend.blog.create', compact('blog'));
    }
    public function edit($id): View
    {
        $blog = Blog::query()->findOrFail($id);
        $blogs = Blog::all();
        return view('pages.backend.blog.edit', compact('blog', 'blogs'));
    }

    public function restore($id): JsonResponse
    {
        if (!$blog = Blog::withTrashed()->find($id)) {
            return $this->handleError([], 'Blog Not Found.', 404);
        }

        $restored_blog = $blog->restore();

        return $this->handleResponse($restored_blog, 'Blog Restored Successfully.', 200);
    }

    public function show($id): JsonResponse
    {
        $blog = Blog::query();

        if (!$blog->withTrashed()->find($id)) {
            return $this->handleError([], 'Blog Not Found.', 404);
        }

        $data = $blog->with(['createdBy', 'deletedBy', 'updatedBy'])->first();

        return $this->handleResponse($data, '', 200);
    }

    public function store($request): RedirectResponse
    {
        try {
            $created_by = Auth::id();
            $validated_request = $request->validated();
            $slug = Str::slug($validated_request['title']);
            $blog = Blog::create([
                'title' => $validated_request['title'],
                'slug' => $slug,
                'description' => $validated_request['description'],
                'external_link' => $validated_request['external_link'] ?? null,
                'is_active' => $validated_request['is_active'] === 'active' ? 1 : 0,
                'thumbnail' => $validated_request['thumbnail'] ?? null,
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

        return redirect()->route('blogs.index');
    }

    public function trashed($id): RedirectResponse
    {
        $blog = Blog::query()->findOrFail($id);
        $blog->update(['deleted_by' => Auth::id()]);
        $blog->delete();

        return redirect()->route('blogs.index');
    }



    public function update(UpdateBlogRequest $request, $id): RedirectResponse
    {
        $blog = Blog::query()->findOrFail($id);

        try {
            $validated_request = $request->validated();
            $updated_by = Auth::id();
            $slug = Str::slug($validated_request['title']);
            $data = [
                'title' => $validated_request['title'],
                'slug' => $slug,
                'description' => $validated_request['description'],
                'external_link' => $validated_request['external_link'] ?? null,
                'is_active' => $validated_request['is_active'] === 'active' ? 1 : 0,
                'updated_by' => $updated_by,
            ];

            $blog->update($data);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('blogs.index');


        $press = Blog::query()->findOrFail($id);

        try {
            $validated_request = $request->validated();
            $updated_by = Auth::id();
            $slug = Str::slug($validated_request['title']);

            $data = [
                'title' => $validated_request['title'],
                'description' => $validated_request['description'],
                'given_organization' => $validated_request['given_organization'],
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

    }

    public function changeStatus($id): RedirectResponse
    {

        $blog = Blog::query()->findOrFail($id);

        return redirect()->route('blogs.index')->with([
            'success' => $blog->update([
                'is_active' => $blog->is_active === 1 ? 0 : 1,
            ]),
            'message' => $blog->is_active === 1 ? 'Blog Deactivated Successfully.' : 'Blag Activated Successfully.',
        ]);
    }
}
