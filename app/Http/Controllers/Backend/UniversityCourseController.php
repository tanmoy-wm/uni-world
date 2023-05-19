<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreUniversityCourseRequest;
use App\Http\Requests\Backend\UpdateUniversityCourseRequest;
use App\Services\Backend\UniversityCourseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UniversityCourseController extends Controller
{
    public function __construct(private UniversityCourseService $service)
    {
    }

    public function changeStatus($id): RedirectResponse
    {
        return $this->service->changeStatus($id);
    }

    public function create(): View
    {
        return $this->service->create();
    }

    public function destroy($id): JsonResponse
    {
        return $this->service->destroy($id);
    }

    public function edit($id): View
    {
        return $this->service->edit($id);
    }

    public function index(Request $request): View
    {
        return $this->service->index($request);
    }

    public function restore($id): JsonResponse
    {
        return $this->service->restore($id);
    }

    public function show($id): JsonResponse
    {
        return $this->service->show($id);
    }

    public function store(StoreUniversityCourseRequest $request): RedirectResponse
    {
        return $this->service->store($request);
    }

    public function trashed($id): RedirectResponse
    {
        return $this->service->trashed($id);
    }

    public function update(UpdateUniversityCourseRequest $request, $id): RedirectResponse
    {
        return $this->service->update($request, $id);
    }
}
