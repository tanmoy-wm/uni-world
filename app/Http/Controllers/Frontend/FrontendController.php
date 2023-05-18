<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;

class FrontendController extends Controller
{

    public function createStudent()
    {
        $countries = Country::all();
        return view('pages.frontend.public.student-register', compact('countries'));
    }

    public function createAgent()
    {
        $countries = Country::all();
        return view('pages.frontend.public.agent-register', compact('countries'));
    }

    public function createUniversity()
    {
        $countries = Country::all();
        return view('pages.frontend.public.university-register', compact('countries'));
    }
}
