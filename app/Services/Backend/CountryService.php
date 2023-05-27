<?php

namespace App\Services\Backend;

use App\Http\Actions\FiltersQuery;
use App\Http\Requests\Backend\StoreCountryRequest;
use App\Models\Country;
use App\Services\BaseService;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CountryService
{
    public function create(): View
    {
        $Country = Country::all();
        return view('pages.backend.Country.create');
    }

    public function destroy($id): JsonResponse
    {
        if (!$country = Country::withTrashed()->find($id)) {
            return $this->handleError([], 'Country Not Found.', 404);
        }
        $country->forceDeleted();
        return $this->handleResponse([], '', 200);
    }

    public function programsEdit(): View
    {
        $Country = Country::all();
        return view('pages.backend.Country.create');
    }



    public function index($request): JsonResponse
    {
        $data = Country::sorted($request->sorted_by);

        if (isset($request->q)) {
            $data = Country::search($data, $request->q);
        }

        if ($request->filter) {
            $data = FiltersQuery::filter($data, $request);
        }
        return $this->handleResponse($data, '', 200);
    }

    public function restore($id): JsonResponse
    {
        if (!$country = Country::withTrashed()->find($id)) {
            return $this->handleError([], 'Country Not Found.', 404);
        }

        $restored_country = $country->restore();

        return $this->handleResponse($restored_country, 'Country Restored Successfully.', 200);
    }

    public function show($id): JsonResponse
    {
        $country = Country::query();

        if (!$country->withTrashed()->find($id)) {
            return $this->handleError([], 'Country Not Found.', 404);
        }
        $data = $country->with(['createdBy', 'deletedBy', 'updatedBy'])->first();

        return $this->handleResponse($data, '', 200);
    }



    public function store(StoreCountryRequest $request): RedirectResponse
    {
        try {
            $created_by = Auth::id();
            $validated_request = $request->validated();

            $country = Country::create([
                'name' => $validated_request['name'],
                'code' => $validated_request['code'],
                'dial_code' => $validated_request['dial_code'],
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

        return redirect()->route('countries.index');
    }

    public function trashed($id): JsonResponse
    {
        if (!$country = Country::withTrashed()->find($id)) {
            return $this->handleError([], 'Country Not Found.', 404);
        }

        if ($country->onlyTrashed()->find($id)) {
            return $this->handleError([], 'Selected Country already in Trashed.', 404);
        }

        $deleted_by = Auth::id();
        $country->delete();

        $data = [
            'deleted_by' => $deleted_by,
            'is_active' => 0
        ];

        $trashed_country = tap($country)->update($data);
        return $this->handleResponse($trashed_country, 'Country Trashed Successfully.', 200);
    }

    public function update($request, $id): JsonResponse
    {
        if (!$country = Country::withTrashed()->find($id)) {
            return $this->handleError([], 'Country Not Found.', 404);
        }
        try {
            $validated_request = $request->validated();
            $updated_by = Auth::id();
            $slug = Str::slug($validated_request['slug']);
            $data = [
                'name' => $validated_request['name'],
                'slug' => $slug,
                'is_active' => $validated_request['is_active'],
                'updated_by' => $updated_by,
            ];

            $updated_country = tap($country)->update($data);
        } catch (Exception $exception) {
            return $this->handleException($exception);
        }

        return $this->handleResponse($updated_country, 'Country Updated Successfully.', 200);
    }
}