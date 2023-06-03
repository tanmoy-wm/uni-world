<?php

namespace App\Services\Admin;

use App\Models\Program;
use App\Models\Student;
use Illuminate\View\View;

class AdminService
{
    public function dashboard(): View
    {
        $student_count = Student::count();
        $program_count = Program::count();
        return view('pages.admin.dashboard', compact('student_count', 'program_count'));
    }

}
