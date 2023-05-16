<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreCategoryRequest;
use App\Http\Requests\Backend\UpdateCategoryRequest;
use App\Services\Backend\CategoryService;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function __construct(public CategoryService $service)
    {
    }

    public function create(): View
    {
        return $this->service->create();
    }

    public function changeStatus($id): RedirectResponse
    {
        return $this->service->changeStatus($id);
    }

    public function destroy($id)
    {
        # code...
    }

    public function edit($id): View
    {
        return $this->service->edit($id);
    }

    public function index(Request $request): View
    {
        return $this->service->index($request);
    }

    public function restore($id)
    {
        return $this->service->restore($id);
    }

    public function show($id)
    {
        return $this->service->show($id);
    }

    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        return $this->service->store($request);
    }

    public function trashed($id): RedirectResponse
    {
        return $this->service->trashed($id);
    }

    public function update(UpdateCategoryRequest $request, $id): RedirectResponse
    {
        return $this->service->update($request, $id);
    }
}
