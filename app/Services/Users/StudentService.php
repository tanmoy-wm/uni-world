<?php

namespace App\Services\Users;

use App\Http\Actions\CreateUserAction;
use App\Http\Actions\FiltersQuery;
use App\Http\Requests\Backend\Users\StoreStudentRequest;
use App\Mail\UserWelcomeMail;
use App\Models\Student;
use App\Services\BaseService;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;

class StudentService
{
    public function create(): View
    {
        return view('pages.backend.student.create');
    }

    public function destroy($id): JsonResponse
    {
        if (!$student = Student::withTrashed()->find($id)) {
            return $this->handleError([], 'Student Not Found.', 404);
        }

        $student->forceDeleted();

        return $this->handleResponse([], '', 200);
    }

    public function index($request): View
    {
        return view('pages.backend.student.index');
    }

    public function restore($id): JsonResponse
    {
        if (!$student = Student::withTrashed()->find($id)) {
            return $this->handleError([], 'Student Not Found.', 404);
        }

        $restored_student = $student->restore();

        return $this->handleResponse($restored_student, 'Student Restored Successfully.', 200);
    }

    public function show($id): JsonResponse
    {
        $student = Student::query();

        if (!$student->withTrashed()->find($id)) {
            return $this->handleError([], 'Student Not Found.', 404);
        }

        $data = $student->with(['createdBy', 'deletedBy', 'updatedBy'])->first();

        return $this->handleResponse($data, '', 200);
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

    public function trashed($id): JsonResponse
    {
        if (!$student = Student::withTrashed()->find($id)) {
            return $this->handleError([], 'Student Not Found.', 404);
        }

        if ($student->onlyTrashed()->find($id)) {
            return $this->handleError([], 'Selected Student already in Trashed.', 404);
        }

        $deleted_by = Auth::id();
        $student->delete();

        $data = [
            'deleted_by' => $deleted_by,
            'is_active'  => 0
        ];

        $trashed_student = tap($student)->update($data);

        return $this->handleResponse($trashed_student, 'Student Trashed Successfully.', 200);
    }

    public function update($request, $id): JsonResponse
    {
        if (!$student = Student::withTrashed()->find($id)) {
            return $this->handleError([], 'Student Not Found.', 404);
        }

        try {
            $validated_request = $request->validated();
            $updated_by = Auth::id();
            $slug = Str::slug($validated_request['slug']);

            $data = [
                'name'            => $validated_request['name'],
                'slug'            => $slug,
                'is_active'       => $validated_request['is_active'],
                'updated_by'      => $updated_by,
            ];

            $updated_student = tap($student)->update($data);
        } catch (Exception $exception) {
            return $this->handleException($exception);
        }

        return $this->handleResponse($updated_student, 'Student Updated Successfully.', 200);
    }
}
