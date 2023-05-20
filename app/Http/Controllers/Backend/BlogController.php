<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreBlogRequest;
use App\Http\Requests\Backend\UpdateBlogRequest;
use App\Services\Backend\BlogService;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class BlogController extends Controller
{
    public function __construct(public BlogService $service)
    {

    }

    public function create(): View
    {
        return $this->service->create();
    }

    public function edit($id): View
    {
        return $this->service->edit($id);
    }

    public function destroy($id): JsonResponse
    {
        return $this->service->destroy($id);
    }

    public function index(): View
    {
        return $this->service->index();
    }


    public function restore($id): JsonResponse
    {
        return $this->service->restore($id);
    }

    public function show($id): JsonResponse
    {
        return $this->service->show($id);
    }

    public function store(StoreBlogRequest $request): RedirectResponse
    {
        return $this->service->store($request);
    }

   
    public function trashed($id): RedirectResponse
    {
        return $this->service->trashed($id);
    }

    public function update(UpdateBlogRequest $request, $id): RedirectResponse
    {
        return $this->service->update($request, $id);
    }

}