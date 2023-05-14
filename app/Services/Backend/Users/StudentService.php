<?php

namespace App\Services\Backend\Users;

use App\Http\Actions\CreateUserAction;
use App\Http\Actions\UpdateUserAction;
use App\Http\Requests\Backend\Users\StoreStudentRequest;
use App\Mail\UserWelcomeMail;
use App\Models\Student;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class StudentService
{
    public function create(): View
    {
        return view('pages.backend.users.student.create');
    }

    public function destroy($id): View
    {
        $student = Student::query()->findOrFail($id);

        $student->forceDelete();

        return view('pages.backend.users.student.index');
    }

    public function edit($id): View
    {
        $student = Student::query()->findOrFail($id);

        return view('pages.backend.users.student.edit', compact('student'));
    }

    public function index($request): View
    {
        $students = Student::all();
        return view('pages.backend.users.student.index', compact('students'));
    }

    public function restore($id)
    {
        # code...
    }

    public function show($id): View
    {
        $student = Student::query()->findOrFail($id);

        return view('pages.backend.users.student.show', compact('student'));
    }

    public function store(StoreStudentRequest $request): RedirectResponse
    {
        try {
            $validated_request = $request->validated();

            // dd($validated_request);
            DB::transaction(function () use ($validated_request) {
                $data = Student::create([
                    'first_name'    => $validated_request['first_name'],
                    'middle_name'   => $validated_request['middle_name'],
                    'last_name'     => $validated_request['last_name'],
                    'email'         => $validated_request['email'],
                    'country_code'  => $validated_request['country_code'],
                    'mobile_number' => $validated_request['mobile_number'],
                    'state'         => $validated_request['state'],
                    'country'       => $validated_request['state'],
                    'dob'           => $validated_request['dob'],
                ]);

                CreateUserAction::execute($data, $validated_request['password']);

                Mail::to($data->email)->send((new UserWelcomeMail($data, $validated_request['password']))->afterCommit());
            });
        } catch (Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }

        return redirect()->route('students.index');
    }

    public function trashed($id): RedirectResponse
    {
        DB::transaction(function () use ($id) {
            $student = Student::query()->findOrFail($id);
            $student->user->delete();
            $student->delete();
        });


        return redirect()->route('students.index');
    }

    public function update($request, $id): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request, $id) {
                $student = Student::query()->findOrFail($id);
                $validated_request = $request->validated();

                $data = [
                    'first_name'    => $validated_request['first_name'],
                    'middle_name'   => $validated_request['middle_name'],
                    'last_name'     => $validated_request['last_name'],
                    'email'         => $validated_request['email'],
                    'country_code'  => $validated_request['country_code'],
                    'mobile_number' => $validated_request['mobile_number'],
                    'state'         => $validated_request['state'],
                    'country'       => $validated_request['country'],
                    'dob'           => $validated_request['dob'],
                ];

                $student->update($data);

                UpdateUserAction::execute($student, $validated_request);
            });
        } catch (Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }

        return redirect()->route('students.index');
    }
}
