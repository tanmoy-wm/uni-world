@extends('layouts.fe-auth')
@section('content')
    <div class="dashboardDtlsArea">
        <div class="dashboardDtlsAreainner">
            <div class="card">
                <h4 class="card-title m-2">
                    Add new student
                </h4>
                <hr>
                <div class="card-body">
                    <form class="form-sample" id="createStudent" action="{{ route('frontend.agent.student-store') }}"
                        method="POST">
                        @csrf
                        @if ($errors->any())
                            @include('theme.components.backend.errors', ['errors' => $errors])
                        @endif
                        <h5>Personal Information</h5>
                        @csrf
                        <div class="form-group">
                            <label for="first-name" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" type="text" id="first-name" name="first_name" />
                        </div>

                        <div class="form-group">
                            <label for="middle-text" class="col-form-label">Middle Name</label>
                            <input class="form-control" type="text" id="middle-name" name="middle_name" />
                        </div>

                        <div class="form-group">
                            <label for="last-name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" id="last-name" name="last_name" />
                        </div>

                        <div class="form-group">
                            <label for="dob" class="col-form-label">Date of Birth</label>
                            <input class="form-control" type="date" id="dob" name="dob" />
                        </div>

                        <div class="form-group">
                            <label for="country" class="col-form-label">Country of Citizenship</label>
                            <select class="form-control" name="country" required>
                                @forelse ($countries as $country)
                                    <option value="{{ $country->name }}">{{ $country->name }}
                                    </option>
                                @empty
                                    <option value="">No Country Found</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="passport_number" class="col-form-label">Passport Number</label>
                            <input class="form-control" type="text" id="passport_number" name="passport_number" />
                            <span class="text-muted text-sm">Passport number is optional, but strongly recommended.</span>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-form-label">Gender</label>
                            <select class="form-control" name="gender" id="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <h5>Contact Information</h5>

                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input class="form-control" type="email" id="email" name="email" />
                        </div>

                        <div class="form-group">
                            <label for="country_code" class="col-form-label">Country Code</label>
                            <select class="form-control" id="country_code" name="country_code" required>
                                @forelse ($countries as $country)
                                    <option value="{{ $country->dial_code }}">
                                        {{ $country->name }}
                                        {{ $country->dial_code }}</option>
                                @empty
                                    <option value="">No Country Code Found</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="mobile_number" class="col-form-label">Mobile number</label>
                            <input class="form-control" type="mobile_number" id="mobile_number" name="mobile_number" />
                        </div>

                        <h5>Lead Management</h5>

                        <div class="form-group">
                            <label for="status" class="col-form-label">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="">Please choose a status</option>
                                <option value="new_lead">New lead</option>
                                <option value="follow_up">Follow up</option>
                                <option value="ready_to_apply">Ready to apply</option>
                                <option value="bank_account">Bank Account</option>
                                <option value="tourism">Tourism</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="referral_source" class="col-form-label">Referral Source</label>
                            <select class="form-control" id="referral_source" name="referral_source" required>
                                <option value="">Please choose a referral source</option>
                                <option value="walk_in">Walk in</option>
                                <option value="facebook">Facebook</option>
                                <option value="youtube">Youtube</option>
                                <option value="client">Client</option>
                                <option value="another_student">Another student</option>
                                <option value="friend">Friend</option>
                                <option value="staff">Staff</option>
                                <option value="in_person_event">In person event</option>
                                <option value="virtual_event">Virtual event</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="country_of_interest" class="col-form-label">Country of interest</label>
                            <select class="form-control" id="country_of_interest" name="country_of_interest" required>
                                @forelse ($countries as $country)
                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                @empty
                                    <option value="">No Country Found</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="service_of_interest" class="col-form-label">Service of interest</label>
                            <select class="form-control" id="service_of_interest" name="service_of_interest" required>
                                <option value="">Please choose a service of interest</option>
                                <option value="programs">Programs</option>
                                <option value="scholarships">Scholarships</option>
                                <option value="visa_services">Visa Service</option>
                                <option value="bank_account">Bank Account</option>
                                <option value="tourism">Tourism</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary ml-2">Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
