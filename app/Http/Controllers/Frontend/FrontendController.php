<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Country;
use App\Models\Press;
use App\Models\Program;
use App\Models\University;
use App\Models\UniversityCourse;
use Illuminate\View\View;

class FrontendController extends Controller
{

    public function createStudent(): View
    {
        $countries = Country::all();
        return view('pages.frontend.public.student-register', compact('countries'));
    }

    public function createAgent(): View
    {
        $countries = Country::all();
        return view('pages.frontend.public.agent-register', compact('countries'));
    }

    public function createUniversity(): View
    {
        $countries = Country::all();
        return view('pages.frontend.public.university-register', compact('countries'));
    }

    public function getBlogs()
    {
        $blogs = Blog::all();
        return view('pages.frontend.public.blog', compact('blogs'));
    }

    public function getPrees()
    {
        $press = Press::all();
        return view('pages.frontend.public.press', compact('press'));
    }

    public function getUniversityCourses(): View
    {
        $programs = Program::query()->with(['category', 'createdBy', 'university', 'updatedBy'])->get();
        $universities = University::query()->with('country')->get();
        return view('pages.frontend.auth.programs', compact('programs', 'universities'));
    }

    public function universityShow($username): View
    {
        $university = University::query()
            ->where('username', $username)
            ->with(['country', 'features', 'universityCourses'])
            ->first();

        return view('pages.frontend.auth.university-show', compact('university'));
    }
}
