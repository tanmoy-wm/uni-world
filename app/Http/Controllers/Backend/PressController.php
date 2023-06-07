<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Services\Backend\PressService;
use App\Http\Requests\Backend\StorePressRequest;
use App\Http\Requests\Backend\UpdatePressRequest;

class PressController extends Controller
{
    public function __construct(public PressService $service)
    {
    }

    public function create(): View
    {
        return $this->service->create();
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


    public function store(StorePressRequest $request): RedirectResponse
    {
        return $this->service->store($request);
    }


    public function trashed($id): RedirectResponse
    {
        return $this->service->trashed($id);
    }


    public function edit($id): View
    {
        return $this->service->edit($id);
    }

    public function update(UpdatePressRequest $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function changeStatus($id): RedirectResponse
    {
        return $this->service->changeStatus($id);
    }
}
