<?php

namespace App\Services\Backend;

use App\Http\Actions\FiltersQuery;
use App\Models\Page;
use App\Services\BaseService;
use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PageService
{
    public function destroy($id): JsonResponse
    {
        if (!$page = Page::withTrashed()->find($id)) {
            return $this->handleError([], 'Page Not Found.', 404);
        }

        $page->forceDeleted();

        return $this->handleResponse([], '', 200);
    }

    public function edit($id): View
    {
        $page = Page::query()->findOrFail($id);
        $pages = Page::all();
        return view('pages.backend.page.edit', compact('page', 'pages'));
    }


    public function index() :View
    {
         $pages = Page::latest()->get();
        return view('pages.backend.page.index', compact('pages'));
    }

    public function create(): View
    {

        return view('pages.backend.page.create');
    }

    public function restore($id): JsonResponse
    {
        if (!$page = Page::withTrashed()->find($id)) {
            return $this->handleError([], 'Page Not Found.', 404);
        }

        $restored_page = $page->restore();

        return $this->handleResponse($restored_page, 'Page Restored Successfully.', 200);
    }

    public function show($id): JsonResponse
    {
        $page = Page::query();

        if (!$page->withTrashed()->find($id)) {
            return $this->handleError([], 'Page Not Found.', 404);
        }

        $data = $page->with(['createdBy', 'deletedBy', 'updatedBy'])->first();

        return $this->handleResponse($data, '', 200);
    }

    public function store($request):  RedirectResponse
    {
        try {
            $created_by = Auth::id();
            $validated_request = $request->validated();
            $slug = Str::slug($validated_request['title']);

            $page = Page::create([
                'title' => $validated_request['title'],
                'slug' => $slug,
                'description' => $validated_request['description'],
                'external_link' => $validated_request['external_link'] ?? null,
                'thumbnail' => $validated_request['thumbnail'] ?? null,
                'meta_title' => $validated_request['meta_title'],
                'meta_description' => $validated_request['meta_description'],
                'key_word' => $validated_request['key_word'],
                'is_active' => $validated_request['is_active'] === 'active' ? 1 : 0,
                'created_by'      => $created_by,
                'updated_by'      => $created_by,
            ]);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }
        return redirect()->route('pages.index');
    }

    public function trashed($id): JsonResponse
    {
        if (!$page = Page::withTrashed()->find($id)) {
            return $this->handleError([], 'Page Not Found.', 404);
        }

        if ($page->onlyTrashed()->find($id)) {
            return $this->handleError([], 'Selected Page already in Trashed.', 404);
        }

        $deleted_by = Auth::id();
        $page->delete();

        $data = [
            'deleted_by' => $deleted_by,
            'is_active'  => 0
        ];

        $trashed_page = tap($page)->update($data);

        return $this->handleResponse($trashed_page, 'Page Trashed Successfully.', 200);
    }

    public function update($request, $id): RedirectResponse
    {
        $page = Page::query()->findOrFail($id);

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

            $page->update($data);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('pages.index');
    }

    public function changeStatus($id): RedirectResponse
    {

        $page = Page::query()->findOrFail($id);

        return redirect()->route('pages.index')->with([
            'success' => $page->update([
                'is_active' => $page->is_active === 1 ? 0 : 1,
            ]),
            'message' => $page->is_active === 1 ? 'Blog Deactivated Successfully.' : 'Page Activated Successfully.',
        ]);
    }
}
