<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Users\StoreStudentRequest;
use App\Http\Requests\Backend\Users\UpdateStudentRequest;
use App\Services\Backend\Users\StudentService;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function __construct(public StudentService $service)
    {
    }

    public function create(): View
    {
        return $this->service->create();
    }

    public function destroy($id): View
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

    public function restore($id)
    {
        return $this->service->restore($id);
    }

    public function show($id): View
    {
        return $this->service->show($id);
    }

    public function store(StoreStudentRequest $request): RedirectResponse
    {
        return $this->service->store($request);
    }

    public function trashed($id): RedirectResponse
    {
        return $this->service->trashed($id);
    }

    public function update($id, UpdateStudentRequest $request): RedirectResponse
    {
        return $this->service->update($request, $id);
    }
}
