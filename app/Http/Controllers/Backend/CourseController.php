<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\Backend\CourseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct(public CourseService $service)
    {
    }

    public function destroy($id): JsonResponse
    {
        return $this->service->destroy($id);
    }

    public function index(Request $request): JsonResponse
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

    public function store(StoreBlogRequest $request): RedirectResponse
    {
        return $this->service->store($request);
    }
    public function store(Request $request): RedirectResponse
    {
        return $this->service->store($request);
    }

    public function trashed($id): JsonResponse
    {
        return $this->service->trashed($id);
    }

    public function update($request, $id): JsonResponse
    {
        return $this->service->update($request);
    }
}