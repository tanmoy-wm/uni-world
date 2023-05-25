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
                    <h5 class="card-title text-center"> Education Summary</h5>
                    <hr />
                    <p class="text-muted">Please enter the information for the highest academic level that you have
                        completed.</p>
                    <div class="card-body">
                        <div class="p-3 py-5">
                            <form method="POST" action="{{ route('auth.update-profile') }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    @if ($errors->any())
                                        @include('theme.components.backend.errors', ['errors' => $errors])
                                    @endif

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Country of Education</label>
                                        <select class="form-control" name="country_of_education" required>
                                            @forelse ($countries as $country)
                                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                                            @empty
                                                <option value="">No Country Code Found</option>
                                            @endforelse
                                        </select>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Highest Level Of Education</label>
                                        <select class="form-control" name="highest_level_of_education" required>
                                            <option value="Grade 1">Select Highest Level Of Education</option>
                                            <optgroup label="Primary">
                                                <option value="Grade 1">Grade 1</option>
                                                <option value="Grade 2">Grade 2</option>
                                                <option value="Grade 3">Grade 3</option>
                                                <option value="Grade 4">Grade 4</option>
                                                <option value="Grade 5">Grade 5</option>
                                                <option value="Grade 6">Grade 6</option>
                                                <option value="Grade 7">Grade 7</option>
                                                <option value="Grade 8">Grade 8</option>
                                            </optgroup>

                                            <optgroup label="Secondary">
                                                <option value="Grade 9">Grade 9</option>
                                                <option value="Grade 10">Grade 10</option>
                                                <option value="Grade 11">Grade 11</option>
                                                <option value="Grade 12">Grade 12 / High School</option>
                                            </optgroup>

                                            <optgroup label="Undergraduate">
                                                <option value="1-Year Post-Secondary Certificate">1-Year
                                                    Post-Secondary Certificate</option>
                                                <option value="2-Year Undergraduate Diploma">2-Year Undergraduate Diploma
                                                </option>
                                                <option value="3-Year Undergraduate Advanced Diploma">3-Year Undergraduate
                                                    Advanced Diploma</option>
                                                <option value="3-Year Bachelors Degree">3-Year Bachelors Degree</option>
                                                <option value="4-Year Bachelors Degree">4-Year Bachelors Degree</option>
                                            </optgroup>

                                            <optgroup label="Postgraduate">
                                                <option value="Postgraduate Certificate / Diploma">1-Year
                                                    Postgraduate Certificate / Diploma</option>
                                                <option value="Master Degree">Master Degree
                                                </option>
                                                <option value="Doctoral Degree(Phd, M.D, ...)">Doctoral Degree(Phd, M.D,
                                                    ...)</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Grading Scheme</label>
                                        <select class="form-control" name="grading_scheme" required>
                                            <option value="Grade 1">Select Grading Scheme</option>
                                            <option value="Letter Grade: Fail - Outstanding">Letter Grade: Fail -
                                                Outstanding</option>
                                            <option value="Letter Grade: F to AA / A+">Letter Grade: F to AA / A+
                                            </option>
                                            <option value="Letter Grade Scale: F - O">Letter Grade Scale: F - O</option>
                                            <option value="Letter Grade Division/Class">Letter Grade Division/Class
                                            </option>
                                            <option value="Higher Education Grade Point 10 Scale">Higher Education Grade
                                                Point 10 Scale</option>
                                            <option value="Higher Education Percentage Scale 0-100">Higher Education
                                                Percentage Scale 0-100</option>
                                            <option value="Higher Education (Degree) Division Scale">Higher Education
                                                (Degree) Division Scale</option>
                                            <option value="Hingher Education (Bachelor and Above) Percentage Scale 0-100 ">
                                                Hingher Education (Bachelor and Above) Percentage Scale 0-100 </option>
                                            <option value="Hingher Education (Bachelor and Above) Grade Point 10 Scale">
                                                Hingher Education (Bachelor and Above) Grade Point 10 Scale</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="labels">Grade Average</label><input type="text"
                                            class="form-control" name="grade_average" placeholder="Grade Average"
                                            value="{{ old('grade_average') ?? $user->grade_average }}" required>
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
