<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreUniversityCourseRequest;
use App\Http\Requests\Backend\UpdateUniversityCourseRequest;
use App\Http\Requests\Backend\Users\StoreUniversityRequest;
use App\Http\Requests\Backend\Users\UpdateUniversityRequest;
use App\Services\Backend\Users\UniversityService;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class UniversityController extends Controller
{
    public function __construct(public UniversityService $service)
    {
    }

    public function create(Request $request)
    {
        return $this->service->create($request);
    }

    public function createProgram(Request $request)
    {
        return $this->service->createProgram($request);
    }

    public function destroy($id)
    {
        return $this->service->destroy($id);
    }

    public function edit($id)
    {
        return $this->service->edit($id);
    }

    public function index(Request $request)
    {
        return $this->service->index($request);
    }

    public function programsIndex($username)
    {
        return $this->service->programsIndex($username);
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

    public function storeProgram(StoreUniversityCourseRequest $request): RedirectResponse
    {

        return $this->service->storeProgram($request);
    }

    public function programsEdit(Request $request, $username, $id)
    {
        return $this->service->programsEdit($id);
    }

    public function trashed($id): RedirectResponse
    {
        return $this->service->trashed($id);
    }

    public function update(UpdateUniversityRequest $request, $id): RedirectResponse
    {
        return $this->service->update($request, $id);
    }
    public function updtedProgram(UpdateUniversityCourseRequest $request, $username, $id): RedirectResponse
    {
        return $this->service->updtedProgram($request, $username, $id);
    }

    public function changeStatus($username, $id)
    {
        return $this->service->changeStatus($id);
    }
}