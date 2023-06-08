@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Agent
        </h3>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Agent</h4>
                <br>
                <form class="form-sample" action="{{ route('agents.update', ['id' => $agent->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        @include('theme.components.backend.errors', ['errors' => $errors])
                    @endif
                    {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Business Certificate</label>
                                <div class="col-sm-9">
                                    <input type="file" name="business_certificate" class="form-control"
                                        accept="image/jpg, image/jpeg, image/png" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Business Logo</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="file" name="business_logo" class="form-control"
                                            aria-label="Text input with dropdown button"
                                            accept="image/jpg, image/jpeg, image/png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Owner First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="first_name" class="form-control"
                                        value="{{ old('first_name') ?? $agent->first_name }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Owner Middle Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="middle_name"
                                        value="{{ old('middle_name') ?? $agent->middle_name }}" class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Owner Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="last_name"
                                        value="{{ old('last_name') ?? $agent->last_name }}" class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email </label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" value="{{ old('email') ?? $agent->email }}"
                                        class="form-control" required />
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
                                                {{ $agent->country_code === $country->dial_code ? 'selected' : '' }}>
                                                {{ $country->name }} {{ $country->dial_code }}</option>
                                        @empty
                                            <option value="">No Country Found</option>
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
                                        value="{{ old('mobile_number') ?? $agent->mobile_number }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="card-description">Address</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" name="address" class="form-control"
                                        value="{{ old('address') ?? $agent->address }}" required></input>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" name="city" class="form-control"
                                        value="{{ old('city') ?? $agent->city }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text" name="state" value="{{ old('state') ?? $agent->state }}"
                                        class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pin/Zip Code</label>
                                <div class="col-sm-9">
                                    <input name="pincode" type="number" value="{{ old('pincode') ?? $agent->pincode }}"
                                        class="form-control" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Student Source Country</label>
                                <div class="col-sm-9">
                                    <input name="student_source_country"
                                        value="{{ old('student_source_country') ?? $agent->student_source_country }}"
                                        type="text" class="form-control" required />
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
                                                {{ $agent->country === $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @empty
                                            <option value="">No Country Found</option>
                                        @endforelse
                                    </select>
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
