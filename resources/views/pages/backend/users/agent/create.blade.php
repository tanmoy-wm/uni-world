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
                <h4 class="card-title">New Agent</h4>
                <br>
                <form class="form-sample" action="{{ route('agents.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                                        value="{{ old('first_name') }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Owner Middle Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="middle_name" value="{{ old('middle_name') }}"
                                        class="form-control" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Owner Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="last_name" value="{{ old('last_name') }}"
                                        class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email </label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                        required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password_confirmation" class="form-control" required />
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
                                            <option value="{{ $country->dial_code }}">{{ $country->dial_code }}</option>
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
                                        value="{{ old('mobile_number') }}" required />
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
                                    <input type="text" name="address" class="form-control" value="{{ old('address') }}"
                                        required></input>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City </label>
                                <div class="col-sm-9">
                                    <input type="text" name="city" class="form-control" value="{{ old('city') }}"
                                        required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">State </label>
                                <div class="col-sm-9">
                                    <input type="text" name="state" value="{{ old('state') }}"
                                        class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pin/Zip Code</label>
                                <div class="col-sm-9">
                                    <input name="pincode" type="number" value="{{ old('pincode') }}"
                                        class="form-control" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Student Source Country </label>
                                <div class="col-sm-9">
                                    <input name="student_source_country" value="{{ old('student_source_country') }}"
                                        type="text" class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Country</label>
                                <div class="col-sm-9">
                                    <select name="country" class="form-control" required>
                                        @forelse ($countries as $country)
                                            <option value="{{ $country->name }}">{{ $country->name }}</option>
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
                                <label class="col-sm-3 col-form-label">Preferred Contact Method </label>
                                <div class="col-sm-9">
                                    <select name="preferred_contact_method" class="form-control" required>

                                        <option value="{{ $country->name }}">Yes</option>


                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Preferred Contact Method Number</label>
                                <div class="col-sm-9">
                                    <input name="preferred_contact_method_number"
                                        value="{{ old('preferred_contact_method_number') }}" type="text"
                                        class="form-control" required />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">How Did You Find
                                    About Uniwolc </label>
                                <div class="col-sm-9">
                                    <input name="how_did_you_find_about_uniwolc"
                                        value="{{ old('how_did_you_find_about_uniwolc') }}" type="text"
                                        class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">In Which Year You Start Recruiting</label>
                                <div class="col-sm-9">
                                    <input name="in_which_year_you_start_recruiting"
                                        value="{{ old('in_which_year_you_start_recruiting') }}" type="text"
                                        class="form-control" required />

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Provided Service </label>
                                <div class="col-sm-9">
                                    <select name="provided_service" class="form-control" required>

                                        <option value="{{ $country->name }}">Yes</option>


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
