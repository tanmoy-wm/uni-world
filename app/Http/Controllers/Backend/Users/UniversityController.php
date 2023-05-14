<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Users\StoreUniversityRequest;
use App\Services\Backend\Users\UniversityService;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class UniversityController extends Controller
{
    public function __construct(public UniversityService $service)
    {
    }
    public function create(Request $request)
    {
        return $this->service->create($request);
    }

    public function destroy($id)
    {
        return $this->service->destroy($id);
    }

    public function index(Request $request)
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

    public function store(StoreUniversityRequest $request): RedirectResponse
    {

        return $this->service->store($request);
    }

    public function trashed($id): RedirectResponse
    {
        return $this->service->trashed($id);
    }

    public function update($request, $id): RedirectResponse
    {
        return $this->service->update($request, $id);
    }
}
