<?php

namespace App\Services\Backend;

use App\Http\Actions\CreateUserAction;
use App\Http\Actions\FiltersQuery;
use App\Models\University;
use App\Services\BaseService;

use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;

class UniversityService 
{
    public function create($request)
    {
        return view('pages.university.create');
    }
    public function destroy($id): JsonResponse
    {
        if (!$university = University::withTrashed()->find($id)) {
            return $this->handleError([], 'University Not Found.', 404);
        }

        $university->forceDeleted();

        return $this->handleResponse([], '', 200);
    }

    public function index($request)
    {
        return view('pages.university.index');
    }

    public function restore($id): JsonResponse
    {
        if (!$university = University::withTrashed()->find($id)) {
            return $this->handleError([], 'University Not Found.', 404);
        }

        $restored_university = $university->restore();

        return $this->handleResponse($restored_university, 'University Restored Successfully.', 200);
    }

    public function show($id): JsonResponse
    {
        $university = University::query();

        if (!$university->withTrashed()->find($id)) {
            return $this->handleError([], 'University Not Found.', 404);
        }

        $data = $university->with(['createdBy', 'deletedBy', 'updatedBy'])->first();

        return $this->handleResponse($data, '', 200);
    }

    public function store($request): RedirectResponse
    {
        try {
                $validated_request = $request->validated();

                // dd($validated_request);
                DB::transaction(function () use ($validated_request) {
                    $data = university::create([
                        'name'    => $validated_request['name'],
                        'username'   => $validated_request['username'],
                        'email'      => $validated_request['email'],
                        'password'   => $validated_request['password'],
                        'country_code'  => $validated_request['country_code'],
                        'mobile_number' => $validated_request['mobile_number'],
                        'alt_country_code'  => $validated_request['alt_country_code'],
                        'alt_mobile_number' => $validated_request['alt_mobile_number'],
                        'address'  => $validated_request['address'],
                        'city' => $validated_request['city'],
                        'country'  => $validated_request['country'],
                        'pincode' => $validated_request['pincode'],
                        'status'  => 'Pending',
                        'website' => $validated_request['website'],
                        'linkedin'  => 'linkedin',
                        'facebook' => 'facebook',
                        'instagram'  =>'instagram',
                        'twitter' => 'twitter',
                    ]); 
                
                    CreateUserAction::execute($data, $validated_request['password']);
                });

                // Mail::to($data->email)->send((new UserWelcomeMail($data, $validated_request['password']))->afterCommit());
              
        } catch (Exception $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }

        return redirect()->route('universities.index');
    }

    public function trashed($id): JsonResponse
    {
        if (!$university = University::withTrashed()->find($id)) {
            return $this->handleError([], 'University Not Found.', 404);
        }

        if ($university->onlyTrashed()->find($id)) {
            return $this->handleError([], 'Selected University already in Trashed.', 404);
        }

        $deleted_by = Auth::id();
        $university->delete();

        $data = [
            'deleted_by' => $deleted_by,
            'is_active'  => 0
        ];

        $trashed_university = tap($university)->update($data);

        return $this->handleResponse($trashed_university, 'University Trashed Successfully.', 200);
    }

    public function update($request, $id): JsonResponse
    {
        if (!$university = University::withTrashed()->find($id)) {
            return $this->handleError([], 'University Not Found.', 404);
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

            $updated_university = tap($university)->update($data);
        } catch (Exception $exception) {
            return $this->handleException($exception);
        }

        return $this->handleResponse($updated_university, 'University Updated Successfully.', 200);
    }
}
