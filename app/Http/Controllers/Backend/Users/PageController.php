<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StorePageRequest;
use App\Http\Requests\Backend\UpdatePageRequest;
use App\Services\Backend\PageService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
class PageController extends Controller
{
    public function __construct(public PageService $service)
    {
    }

    public function destroy($id): JsonResponse
    {
        return $this->service->destroy($id);
    }

    public function edit($id): View
    {
        return $this->service->edit($id);
    }

    public function index(Request $request)
    {
        return $this->service->index($request);
    }

    public function create(): View
    {
        return $this->service->create();
    }

    public function restore($id): JsonResponse
    {
        return $this->service->restore($id);
    }

    public function show($id): JsonResponse
    {
        return $this->service->show($id);
    }

    public function store(StorePageRequest $request): RedirectResponse
    {
        return $this->service->store($request);
    }

    public function trashed($id): JsonResponse
    {
        return $this->service->trashed($id);
    }

    public function update(UpdatePageRequest $request, $id): RedirectResponse
    {
        return $this->service->update($request, $id);
    }

    public function changeStatus($id): RedirectResponse
    {
        return $this->service->changeStatus($id);
    }
}
