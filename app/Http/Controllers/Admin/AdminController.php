<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\AdminService;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(public AdminService $service)
    {
    }

    public function dashboard()
    {
        return $this->service->dashboard();
    }


}
