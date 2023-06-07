<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Users\StoreAgentRequest;
use App\Http\Requests\Backend\Users\StoreStudentRequest;
use App\Http\Requests\Backend\Users\UpdateAgentRequest;
use App\Services\Backend\Users\AgentService;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AgentController extends Controller
{
    public function __construct(public AgentService $service)
    {
    }

    public function create(Request $request): View
    {
        return $this->service->create($request);
    }

    public function createStudent(Request $request): View
    {
        return $this->service->createStudent();
    }

    public function dashboard()
    {
        return $this->service->dashboard();
    }

    public function destroy($id)
    {
        return $this->service->destroy($id);
    }

    public function edit($id): View
    {
        return $this->service->edit($id);
    }

    public function getStudents(): View
    {
        return $this->service->getStudents();
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


    public function store(StoreAgentRequest $request): RedirectResponse
    {
        return $this->service->store($request);
    }

    public function storeStudent(StoreStudentRequest $request): RedirectResponse
    {
        return $this->service->storeStudent($request);
    }

    public function trashed($id): RedirectResponse
    {
        return $this->service->trashed($id);
    }

    public function update(UpdateAgentRequest $request, $id): RedirectResponse
    {
        return $this->service->update($request, $id);
    }
}
