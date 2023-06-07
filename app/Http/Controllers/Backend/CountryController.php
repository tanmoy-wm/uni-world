<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\StoreCountryRequest;
use App\Services\Backend\CountryService;
use App\Http\Controllers\Controller;
use App\Models\Country;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CountryController extends Controller
{
    public function __construct(public CountryService $service)
    {
    }

    public function create(): View
    {
        return $this->service->create();
    }

    public function store(StoreCountryRequest $request): RedirectResponse
    {
        return $this->service->store($request);
    }

    public function index(Request $request): View
    {
        $countries = Country::query()->paginate(15);
        return view('pages.backend.country.index', compact('countries'));
    }

    public function changeStatus($id): RedirectResponse
    {
        $country = Country::query()->findOrFail($id);
        return redirect()->route('countries.index')->with([
            'success' => $country->update([
                'is_active' => $country->is_active === 1 ? 0 : 1,
            ]),
            'message' => $country->is_active === 1 ? 'Country Deactivated Successfully.' : 'Country Activated Successfully.',
        ]);
    }
}