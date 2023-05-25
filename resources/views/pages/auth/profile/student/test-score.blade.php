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
                    <h5 class="card-title text-center"> Englsih Test Scores</h5>
                    <hr />
                    <div class="card-body">
                        <div class="p-3 py-5">
                            <form method="POST" action="{{ route('student.profile.update-eng-test-score') }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    @if ($errors->any())
                                        @include('theme.components.backend.errors', ['errors' => $errors])
                                    @endif

                                    <div class="col-md-12 mb-3">
                                        <input type="radio" required class="form-check-input" id="toefl-checked"
                                            name="english_test_type" value="TOEFL">
                                        <label for="toefl-checked">TOEFL</label>

                                        <div id="toefl" class="custom-diplay-hidden showall">
                                            <p class="card-description">Your Scores</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Reading Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="toefl_reading_score"
                                                                value="{{ old('toefl_reading_score') ?? $user->toefl_reading_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Listening Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="toefl_listening_score"
                                                                value="{{ old('toefl_listening_score') ?? $user->toefl_listening_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Writing Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="toefl_writing_score"
                                                                value="{{ old('toefl_writing_score') ?? $user->toefl_writing_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Speaking Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="toefl_speaking_score"
                                                                value="{{ old('toefl_speaking_score') ?? $user->toefl_speaking_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Exam Date</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" class="form-control"
                                                                name="toefl_exam_date"
                                                                value="{{ old('toefl_exam_date') ?? $user->toefl_exam_date }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <input type="radio" required class="form-check-input" id="ielts-checked"
                                            name="english_test_type" value="IELTS">
                                        <label for="ielts-checked">IELTS</label>

                                        <div id="ielts" class="custom-diplay-hidden showall">
                                            <p class="card-description">Your Scores</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Reading Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="ielts_reading_score"
                                                                value="{{ old('ielts_reading_score') ?? $user->ielts_reading_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Listening Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="ielts_listening_score"
                                                                value="{{ old('ielts_listening_score') ?? $user->ielts_listening_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Writing Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="ielts_writing_score"
                                                                value="{{ old('ielts_writing_score') ?? $user->ielts_writing_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Speaking Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="ielts_speaking_score"
                                                                {{ old('ielts_speaking_score') ?? $user->ielts_speaking_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Exam Date</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" class="form-control"
                                                                name="ielts_exam_date"
                                                                value="{{ old('ielts_exam_date') ?? $user->ielts_exam_date }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <input type="radio" required class="form-check-input" id="pte-checked"
                                            name="english_test_type" value="PTE">
                                        <label for="pte-checked">PTE</label>

                                        <div id="pte" class="custom-diplay-hidden showall">
                                            <p class="card-description">Your Scores</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Total Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="pte_total_score"
                                                                value="{{ old('pte_total_score') ?? $user->pte_total_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Reading Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="pte_reading_score"
                                                                value="{{ old('pte_reading_score') ?? $user->pte_reading_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Listening Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="pte_listening_score"
                                                                value="{{ old('pte_listening_score') ?? $user->pte_listening_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Writing Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="pte_writing_score"
                                                                value="{{ old('pte_writing_score') ?? $user->pte_writing_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Speaking Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="pte_speaking_score"
                                                                value="{{ old('pte_speaking_score') ?? $user->pte_speaking_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Date of Exam</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" class="form-control"
                                                                name="pte_exam_date"
                                                                value="{{ old('pte_exam_date') ?? $user->pte_exam_date }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <input type="radio" required class="form-check-input" id="duolingo-checked"
                                            name="english_test_type" value="Duolingo">
                                        <label for="duolingo-checked">Duolingo</label>

                                        <div id="duolingo" class="custom-diplay-hidden showall">
                                            <p class="card-description">Your Scores</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Total Score</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control"
                                                                name="duolingo_total_score"
                                                                value="{{ old('duolingo_total_score') ?? $user->duolingo_total_score }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Date of Exam</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" class="form-control"
                                                                name="duolingo_exam_date"
                                                                value="{{ old('duolingo_exam_date') ?? $user->duolingo_exam_date }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <input type="radio" required class="form-check-input"
                                            id="i-dont-have-this-checked" name="english_test_type"
                                            value="I don't have this">
                                        <label for="i-dont-have-this-checked">I don't have this</label>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <input type="radio" required class="form-check-input"
                                            id="not-yet-but-i-will-in-the-future-checked" name="english_test_type"
                                            value="Not yet, but I will in the future">
                                        <label for="i-dont-have-this-checked">Not yet, but I will in the future
                                        </label>
                                    </div>

                                    <p class="card-description text-muted text-sm">If you haven't taken a test yet, UniWolc
                                        can
                                        help you take it in the future.</p>

                                    <div class="mt-5 text-end">
                                        <button class="btn btn-primary profile-button" type="submit">
                                            Save Details
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <h4 class="card-title">GRE or GMAT Scores</h4>
                    <hr />
                    <div class="card-body">
                        <div class="p-3 py-5">
                            <form method="POST" action="{{ route('auth.update-profile') }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    @if ($errors->any())
                                        @include('theme.components.backend.errors', ['errors' => $errors])
                                    @endif
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="gmat"
                                        name="is_gmat">
                                    <label class="form-check-label" for="gmat">I have GMAT exam
                                        scores
                                    </label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="gre"
                                        name="is_gre">
                                    <label class="form-check-label" for="gre">I have GRE exam scores
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
