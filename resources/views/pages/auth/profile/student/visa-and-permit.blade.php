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
                        <li class="nav-item"><a class="nav-link" href="{{ route('auth.edit-profile') }}"> General Info</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('student.profile.education-history') }}">Education
                                History</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('student.profile.test-score') }}">Test Score </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('student.profile.visa-and-permit') }}">Visa
                                & Study Permit</a></li>
                    </ul>
                @endif
            </div>

            <div class="col-md-9 border-right">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <h5 class="card-title text-center"> Visa And Permit</h5>
                    <hr />
                    <p class="text-muted">Please enter the information for the highest academic level that you have
                        completed.</p>
                    <div class="card-body">
                        <div class="p-3 py-5">
                            <form method="POST" action="{{ route('student.profile.update-visa-and-permit') }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    @if ($errors->any())
                                        @include('theme.components.backend.errors', ['errors' => $errors])
                                    @endif

                                    <div class="row">
                                        <h4>Have you been refused a visa from Canada, the USA, the United Kingdom, New
                                            Zealand, Australia or Ireland? </h4>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Yes</label>
                                                <div class="col-sm-9">
                                                    <input class="form-check-input" type="radio" id="exampleRadios1"
                                                        value="Yes"
                                                        name="refused_a_visa_from_canada_use_uk_nz_au_ireland"
                                                        {{ $user->refused_a_visa_from_canada_use_uk_nz_au_ireland === 1 ? 'checked' : '' }}
                                                        required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">No</label>
                                                <div class="col-sm-9">
                                                    <input class="form-check-input" type="radio" id="exampleRadios2"
                                                        value="No"
                                                        name="refused_a_visa_from_canada_use_uk_nz_au_ireland"
                                                        {{ $user->refused_a_visa_from_canada_use_uk_nz_au_ireland === 0 ? 'checked' : '' }}
                                                        required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <h4>Which valid study permits or visas do you have?</h4>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Canadian Study Permit/ Visitor
                                                    Visa</label>
                                                <div class="col-sm-9">
                                                    <input class="form-check-input" type="radio"
                                                        id="canadian_study_permit"
                                                        value="Canadian Study Permit/ Visitor Visa"
                                                        name="study_permit_or_visa"
                                                        {{ $user->study_permit_or_visa === 'Canadian Study Permit/ Visitor Visa' ? 'checked' : '' }}
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">USA F1 Visa</label>
                                                <div class="col-sm-9">
                                                    <input class="form-check-input" type="radio" id="usa_study_permit"
                                                        value="USA F1 Visa" name="study_permit_or_visa"
                                                        {{ $user->study_permit_or_visa === 'USA F1 Visa' ? 'checked' : '' }}
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Australian Study Visa</label>
                                                <div class="col-sm-9">
                                                    <input class="form-check-input" type="radio" id="au_study_permit"
                                                        value="Australian Study Visa" name="study_permit_or_visa"
                                                        {{ $user->study_permit_or_visa === 'Australian Study Visa' ? 'checked' : '' }}
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">UK Tier 4 Student/ Short Term Study
                                                    Visa</label>
                                                <div class="col-sm-9">
                                                    <input class="form-check-input" type="radio" id="uk_study_permit"
                                                        value="UK Tier 4 Student/ Short Term Study Visa"
                                                        name="study_permit_or_visa"
                                                        {{ $user->study_permit_or_visa === 'UK Tier 4 Student/ Short Term Study Visa' ? 'checked' : '' }}
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Irish Stamp 2</label>
                                                <div class="col-sm-9">
                                                    <input class="form-check-input" type="radio" id="irish_study_permit"
                                                        value="Irish Stamp 2" name="study_permit_or_visa"
                                                        {{ $user->study_permit_or_visa === 'Irish Stamp 2' ? 'checked' : '' }}
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">I don't have this</label>
                                                <div class="col-sm-9">
                                                    <input class="form-check-input" type="radio" id="none"
                                                        value="I don't have this" name="study_permit_or_visa"
                                                        {{ $user->study_permit_or_visa === 'I don\'t have this' ? 'checked' : '' }}
                                                        required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <h4>Please provide more information about your current study permit/visa and any
                                            past refusals, if any </h4>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <textarea class="form-control" id="study_permit_or_visa_description" rows="3"
                                                    name="study_permit_or_visa_description">{{ $user->study_permit_or_visa_description }}</textarea>
                                            </div>
                                        </div>
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
        </div>
    </div>
@endsection
