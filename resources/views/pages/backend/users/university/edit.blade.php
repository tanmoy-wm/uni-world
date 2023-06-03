@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> University
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                {{-- <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('universities.create') }}" class="btn btn-gradient-primary btn-icon-text">
                        <i class="mdi mdi-account-multiple-plus"></i> Add University </a>
                    <!-- <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> -->
                </li> --}}
            </ul>
        </nav>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit University</h4>
                <br>
                <form class="form-sample" action="{{ route('universities.update', ['id' => $university->id]) }}"
                    method="POST">
                    <!-- <p class="card-description"> Personal info </p> -->
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        @include('theme.components.backend.errors', ['errors' => $errors])
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">University Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name') ?? $university->name }}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">User Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="username" class="form-control"
                                        {{ old('username') ?? $university->username }} required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email </label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email') ?? $university->email }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Country Code</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="country_code" required>
                                        @forelse ($countries as $country)
                                        <option value="{{ $country->dial_code }}"
                                            {{ $university->country_code === $country->dial_code ? 'selected' : '' }}>
                                            {{ $country->name }}{{ $country->dial_code }}</option>
                                        @empty
                                            <option value="">No Country Code Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mobile Number</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" name="mobile_number"
                                        value="{{ old('mobile_number') ?? $university->mobile_number }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alternate Country Code</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="alt_country_code" required>
                                        @forelse ($countries as $country)
                                        <option value="{{ $country->dial_code }}"
                                            {{ $university->country_code === $country->dial_code ? 'selected' : '' }}>
                                            {{ $country->name }}
                                            {{ $country->dial_code }}</option>

                                        @empty
                                            <option value="">No Country Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alternative Mobile Number</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" name="alt_mobile_number"
                                        value="{{ old('alt_mobile_number') ?? $university->alt_mobile_number }}"
                                        required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="card-description"> Address </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address </label>
                                <div class="col-sm-9">
                                    <input type="text" name="address" class="form-control"
                                        value="{{ old('address') ?? $university->address }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City </label>
                                <div class="col-sm-9">
                                    <input type="text" name="city" class="form-control"
                                        value="{{ old('city') ?? $university->city }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">State </label>
                                <div class="col-sm-9">
                                    <input type="text" name="state" class="form-control"
                                        {{ old('state') ?? $university->state }} required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pin/Zip Code</label>
                                <div class="col-sm-9">
                                    <input name="pincode" type="text" class="form-control"
                                        value="{{ old('pincode') ?? $university->pincode }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select name="status" class="form-control " required>
                                        <option value="pending">Pending</option>
                                        <option value="active">Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Country</label>
                                <div class="col-sm-9">
                                    <select name="country" class="form-control " required>
                                        @forelse ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ $university->country === $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @empty
                                            <option value="">No Country Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Website</label>
                                <div class="col-sm-9">
                                    <input name="website" type="url"
                                        value="{{ old('website') ?? $university->website }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Facebook</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="url" name="facebook"
                                        value="{{ old('facebook') ?? $university->facebook }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">LnekdIn</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="url" name="linkedin"
                                        value="{{ old('linkedin') ?? $university->linkedin }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Twitter</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="url" name="twitter"
                                        value="{{ old('twitter') ?? $university->twitter }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Instagram</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="url" name="instagram"
                                        value="{{ old('instgram') ?? $university->instagram }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-gradient-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
