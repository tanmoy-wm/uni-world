<?php

namespace App\Services\Backend\Users;

use App\Http\Actions\CreateUserAction;
use App\Http\Actions\UpdateUserAction;
use App\Http\Requests\Backend\StoreUniversityCourseRequest;
use App\Http\Requests\Backend\UpdateUniversityCourseRequest;
use App\Http\Requests\Backend\Users\StoreUniversityRequest;
use App\Mail\UniversityWelcomeMail;
use App\Models\Category;
use App\Models\Country;
use App\Models\Program;
use App\Models\University;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UniversityService
{
    public function create($request)
    {
        $countries = Country::all();
        return view('pages.backend.users.university.create', compact('countries'));
    }

    public function createProgram($request)
    {
        $countries = Country::all();
        $categories = Category::all();

        return view('pages.backend.users.university.create-program', compact('countries', 'categories'));
    }

    public function destroy($id)
    {
        # code...
    }

    public function edit($id): View
    {
        $university = University::query()->findOrFail($id);
        $countries = Country::all();
        return view('pages.backend.users.university.edit', compact('university', 'countries'));

    }

    public function index($request): View
    {
        $universities = University::all();
        return view('pages.backend.users.university.index', ['universities' => $universities]);
    }

    public function programsIndex($username): View
    {
        $programs = Auth::user()->profile->programs;
        return view('pages.backend.users.university.index-programs', compact('programs'));
    }

    public function programsEdit($id): View
    {

        $program = Program::query()->findOrFail($id);
        $categories = Category::all();

        return view('pages.backend.users.university.edit-program', compact('program', 'categories'));
    }

    public function storeProgram(StoreUniversityCourseRequest $request)
    {
        $user = Auth::user();
        // dd($request->input('university_id'), $user->profile->id);
        if ($user->profile->id != $request->input('university_id')) {
            return redirect()->back()->withErrors('Something went wrong. Please try again later.');
        }

        try {
            $created_by = Auth::id();
            $validated_request = $request->validated();
            $slug = Str::slug($validated_request['title']);

            Program::create([
                'title' => $validated_request['title'],
                'slug' => $slug,
                'description' => $validated_request['description'],
                'duration' => $validated_request['duration'],
                'apply_fees' => $validated_request['apply_fees'],
                'gross_fees' => $validated_request['gross_fees'],
                'total_sem' => $validated_request['total_sem'] ?? null,
                'minimum_qualification' => $validated_request['minimum_qualification'],
                'minimum_gpa' => $validated_request['minimum_gpa'],
                'minimum_language_test_score' => $validated_request['minimum_language_test_score'] ?? null,
                'cost_of_living' => $validated_request['cost_of_living'],
                'program_level' => $validated_request['program_level'],
                'application_open_date' => $validated_request['application_deadline'],
                'application_deadline' => $validated_request['application_deadline'],
                'category_id' => $validated_request['category_id'],
                'university_id' => Auth::user()->profile->id,
                'is_active' => $validated_request['is_active'] === 'active' ? 1 : 0,
                'created_by' => $created_by,
                'updated_by' => $created_by,
            ]);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('university.programs-index', ['username' => $user->profile->username]);
    }

    public function restore($id)
    {
        # code...
    }

    public function show($id)
    {
        # code...
    }

    public function store(StoreUniversityRequest $request): RedirectResponse
    {
        try {
            $validated_request = $request->validated();
            DB::transaction(function () use ($validated_request) {
                $created_by = Auth::id();
                $data = university::create([
                    'name' => $validated_request['name'],
                    'username' => $validated_request['username'],
                    'email' => $validated_request['email'],
                    'password' => $validated_request['password'],
                    'country_code' => $validated_request['country_code'],
                    'mobile_number' => $validated_request['mobile_number'],
                    'alt_country_code' => $validated_request['alt_country_code'] ?? null,
                    'alt_mobile_number' => $validated_request['alt_mobile_number'] ?? null,
                    'address' => $validated_request['address'],
                    'city' => $validated_request['city'],
                    'state' => $validated_request['state'],
                    'country' => $validated_request['country'],
                    'pincode' => $validated_request['pincode'],
                    'status' => $validated_request['status'],
                    'website' => $validated_request['website'] ?? null,
                    'linkedin' => $validated_request['linkedin'] ?? null,
                    'facebook' => $validated_request['facebook'] ?? null,
                    'instagram' => $validated_request['instagram'] ?? null,
                    'twitter' => $validated_request['twitter'] ?? null,
                    'created_by' => $created_by,
                    'updated_by' => $created_by,
                ]);

                CreateUserAction::execute($data, $validated_request['password']);
                Mail::to($data->email)->send((new UniversityWelcomeMail($data, $validated_request['password']))->afterCommit());
            });
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('universities.index');
    }

    public function trashed($id): RedirectResponse
    {
        DB::transaction(function () use ($id) {
            $university = University::query()->findOrFail($id);
            $university->user->delete();
            $university->delete();
        });
        return redirect()->route('universities.index');
    }

    public function update($request, $id): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request, $id) {
                $university = University::query()->findOrFail($id);
                $validated_request = $request->validated();
                $updated_by = Auth::id();

                $data = [
                    'name' => $validated_request['name'],
                    'username' => $validated_request['username'],
                    'country_code' => $validated_request['country_code'],
                    'mobile_number' => $validated_request['mobile_number'],
                    'alt_country_code' => $validated_request['alt_country_code'],
                    'alt_mobile_number' => $validated_request['alt_mobile_number'],
                    'address' => $validated_request['address'],
                    'city' => $validated_request['city'],
                    'country' => $validated_request['country'],
                    'pincode' => $validated_request['pincode'],
                    'status' => $validated_request['status'],
                    'website' => $validated_request['website'],
                    'linkedin' => $validated_request['linkedin'],
                    'facebook' => $validated_request['facebook'],
                    'instagram' => $validated_request['instagram'],
                    'twitter' => $validated_request['twitter'],
                    'updated_by' => $updated_by,
                ];

                $university->update($data);
                UpdateUserAction::execute($university, $data);
            });
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong');
            }
        }

        return redirect()->route('universities.index');
    }

    public function updtedProgram(UpdateUniversityCourseRequest $request, $username, $id)
    {
        $user = Auth::user();

        if ($user->profile->id != $request->input('university_id')) {
            return redirect()->back()->withErrors('Something went wrong. Please try again later.');
        }

        $program = Program::query()->findOrFail($id);

        try {
            $created_by = Auth::id();
            $validated_request = $request->validated();
            $slug = Str::slug($validated_request['title']);

            $data = [
                'title' => $validated_request['title'],
                'slug' => $slug,
                'description' => $validated_request['description'],
                'duration' => $validated_request['duration'],
                'apply_fees' => $validated_request['apply_fees'],
                'gross_fees' => $validated_request['gross_fees'],
                'total_sem' => $validated_request['total_sem'] ?? null,
                'minimum_qualification' => $validated_request['minimum_qualification'],
                'minimum_gpa' => $validated_request['minimum_gpa'],
                'minimum_language_test_score' => $validated_request['minimum_language_test_score'] ?? null,
                'cost_of_living' => $validated_request['cost_of_living'],
                'program_level' => $validated_request['program_level'],
                'application_open_date' => $validated_request['application_deadline'],
                'application_deadline' => $validated_request['application_deadline'],
                'category_id' => $validated_request['category_id'],
                'university_id' => Auth::user()->profile->id,
                'is_active' => $validated_request['is_active'] === 'active' ? 1 : 0,
                'created_by' => $created_by,
                'updated_by' => $created_by,
            ];

            $program->update($data);
        } catch (Exception $exception) {
            if (app()->environment('local')) {
                return redirect()->back()->withErrors($exception->getMessage());
            } else {
                return redirect()->back()->withErrors('Something went wrong. Please try again later.');
            }
        }

        return redirect()->route('university.programs-index', ['username' => $user->profile->username]);
    }




    public function changeStatus($id): RedirectResponse
    {
        $program = Program::query()->findOrFail($id);

        return redirect()->route('university.programs-index', ['username' => Auth::user()->profile->username])->with([
            'success' => $program->update([
                'is_active' => $program->is_active === 1 ? 0 : 1,
            ]),
            'message' => $program->is_active === 1 ? 'Program Deactivated Successfully.' : 'Program Activated Successfully.',
        ]);
    }

}
