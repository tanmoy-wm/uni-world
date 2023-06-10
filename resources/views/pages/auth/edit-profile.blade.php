@extends('layouts.fe-auth')
@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">{{ $user->name }}</span><span
                        class="text-black-50">{{ $user->email }}</span><span>
                    </span>
                </div>
                @if (Auth::user()->profile_type === 'App\Models\Student')
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="#"> General Info</a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('student.profile.education-history') }}">Education History</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('student.profile.test-score') }}">Test Score </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('student.profile.visa-and-permit') }}">Visa
                                & Study
                                Permit</a></li>
                    </ul>
                @endif
            </div>

            <div class="col-md-9 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Update Profile</h4>
                    </div>

                    <form method="POST" action="{{ route('auth.update-profile') }}">
                        @csrf
                        @method('PUT')

                        <div class="row mt-3">
                            @if ($errors->any())
                                @include('theme.components.backend.errors', ['errors' => $errors])
                            @endif

                            <input type="hidden" name="user_type" value="{{ Auth::user()->profile_type }}">
                            @if (Auth::user()->profile_type === 'App\Models\University')
                                <div class="col-md-12 mb-3">
                                    <label class="labels">Name</label><input type="text" class="form-control"
                                        name="name" placeholder="Name" value="{{ old('name') ?? $user->name }}" required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="labels">User Name</label><input type="text" class="form-control"
                                        name="username" placeholder="user Name"
                                        value="{{ old('username') ?? $user->username }}" required>
                                </div>
                            @else
                                <div class="col-md-12 mb-3">
                                    <label class="labels">First Name</label>
                                    <input type="text" class="form-control" placeholder="first name" name="first_name"
                                        value="{{ old('first_name') ?? $user->first_name }}" required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="labels">Middle Name</label>
                                    <input type="text" class="form-control" placeholder="Middle Name" name="middle_name"
                                        value="{{ old('middle_name') ?? $user->middle_name }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="labels">Last Name</label><input type="text" class="form-control"
                                        name="last_name" placeholder="surname"
                                        value="{{ old('last_name') ?? $user->last_name }}" required>
                                </div>
                            @endif

                            <div class="col-md-12 mb-3">
                                <label class="labels">Email ID</label>
                                <input type="email" class="form-control" placeholder="Enter email id" name="email"
                                    value="{{ old('email') ?? $user->email }}" required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="labels">Country Code</label>
                                <select class="form-control" name="country_code" required>
                                    @forelse ($countries as $country)
                                        <option value="{{ $country->dial_code }}"
                                            {{ $country->dial_code == $user->country_code ? 'selected' : '' }}>
                                            {{ $country->name }}
                                            {{ $country->dial_code }}</option>
                                    @empty
                                        <option value="">No Country Code Found</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="labels">Mobile Number</label>
                                <input type="number" class="form-control" placeholder="enter mobile number"
                                    name="mobile_number" value="{{ old('mobile_number') ?? $user->mobile_number }}"
                                    required>
                            </div>

                            @if (Auth::user()->profile_type === 'App\Models\University')
                                <div class="col-md-12 mb-3">
                                    <label class="labels">Alternative Country Code</label>
                                    <select class="form-control" name="alt_country_code" required>
                                        @forelse ($countries as $country)
                                            <option value="{{ $country->dial_code }}"
                                                {{ $country->dial_code == $user->alt_country_code ? 'selected' : '' }}>
                                                {{ $country->dial_code }}</option>
                                        @empty
                                            <option value="">No Country Code Found</option>
                                        @endforelse
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="labels">Alternate Mobile Number</label>
                                    <input type="number" class="form-control" placeholder="enter alternative mobile number"
                                        name="alt_mobile_number"
                                        value="{{ old('alt_mobile_number') ?? $user->alt_mobile_number }}" required>
                                </div>
                            @endif

                            @if (Auth::user()->profile_type === 'App\Models\University' || Auth::user()->profile_type === 'App\Models\Agent')
                                <div class="col-md-12">
                                    <label class="labels">Address</label>
                                    <input type="text" class="form-control" placeholder="Enter address"
                                        name="address" value="{{ old('address') ?? $user->address }}" required>
                                </div>

                                <div class="col-md-12">
                                    <label class="labels">City</label>
                                    <input type="text" class="form-control" placeholder="Enter city" name="city"
                                        value="{{ old('city') ?? $user->city }}" required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="labels">Postcode / Zipcode</label>
                                    <input type="number" class="form-control"
                                        placeholder="Enter your Postcode / Zipcode" name="pincode"
                                        value="{{ old('pincode') ?? $user->pincode }}" required>
                                </div>
                            @endif

                            @if (Auth::user()->profile_type === 'App\Models\Agent')
                                <div class="col-md-12 mb-3">
                                    <label class="labels">Student Source Country</label>
                                    <select class="form-control" name="student_source_country" required>
                                        @forelse ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ $country->name == $user->student_source_country ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @empty
                                            <option value="">No Country Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            @endif

                            @if (Auth::user()->profile_type === 'App\Models\Student')
                                <div class="col-md-12 mb-3">
                                    <label class="labels">Passport Number</label>
                                    <input type="text" class="form-control" placeholder="Enter your passport number"
                                        name="passport_number"
                                        value="{{ old('passport_number') ?? $user->passport_number }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="labels">Passport Expiry Date</label>
                                    <input type="date" class="form-control"
                                        placeholder="Enter your passport expiry date" name="passport_expiry_date"
                                        value="{{ old('passport_expiry_date') ?? $user->passport_expiry_date }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="labels">Marital Status</label>
                                    <select class="form-control" name="marital_status" required>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="labels">Gender</label>
                                    <select class="form-control" name="gender" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="labels">Date of Birth</label>
                                    <input type="date" class="form-control" placeholder="Enter your date of birth"
                                        name="dob" value="{{ old('dob') ?? $user->dob }}" required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="labels">Fast Language</label>
                                    <input type="text" class="form-control" placeholder="Enter your fast language"
                                        name="fast_language" value="{{ old('fast_language') ?? $user->fast_language }}">
                                </div>
                            @endif

                            <div class="col-md-12 mb-3">
                                <label class="labels">State</label>
                                <input type="text" class="form-control" placeholder="Enter your state" name="state"
                                    value="{{ old('state') ?? $user->state }}" required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="labels">Country</label>
                                <select class="form-control" name="country" required>
                                    @forelse ($countries as $country)
                                        <option value="{{ $country->name }}"
                                            {{ $country->name == $user->country ? 'selected' : '' }}>{{ $country->name }}
                                        </option>
                                    @empty
                                        <option value="">No Country Found</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="mt-5 text-end">
                            <button class="btn btn-primary profile-button" type="submit">
                                Save Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
