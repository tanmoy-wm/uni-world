<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Http\Requests\Backend\Users\StoreUniversityRequest;
use App\Services\Backend\UniversityService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function __construct(public UniversityService $service)
    {
    }
    public function create(Request $request){
        
        return $this->service->create($request);
      
    }

    public function destroy($id): JsonResponse
    {
        return $this->service->destroy($id);
    }

    public function index(Request $request)
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

    public function store(StoreUniversityRequest $request): JsonResponse
    {

        return $this->service->store($request);
    }

    public function trashed($id): JsonResponse
    {
        return $this->service->trashed($request);
    }

    public function update($request, $id): JsonResponse
    {
        return $this->service->update($request);
    }
}
