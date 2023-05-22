@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-multiple-outline"></i>
            </span> Programs
        </h3>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Program</h4>
                <form class="form-sample" action={{ route('programs.store') }} method="POST">
                    @csrf
                    @if ($errors->any())
                        @include('theme.components.backend.errors', ['errors' => $errors])
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                        required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="category_id" required>
                                        <option value="active">Select a Category</option>
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @empty
                                            <option value="active">No Category Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Duration</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="duration" value="{{ old('duration') }}"
                                        required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Total Sems</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="total_sems"
                                        value="{{ old('total_sems') }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="is_active" required>
                                        <option value="active">Active</option>
                                        <option value="inactive">In Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">University</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="university_id" required>
                                        <option value="active">Select an University</option>
                                        @forelse ($universities as $university)
                                            <option value="{{ $university->id }}">{{ $university->name }}</option>
                                        @empty
                                            <option value="active">No University Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Apply Fees</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="apply_fees"
                                        value="{{ old('apply_fees') }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gross Fees</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="gross_fees"
                                        value="{{ old('gross_fees') }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Minimum Qualification</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="minimum_qualification"
                                        value="{{ old('minimum_qualification') }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Minimum GPA</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="minimum_gpa"
                                        value="{{ old('minimum_gpa') }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Minimum Language Test Score</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="minimum_language_test_score"
                                        value="{{ old('minimum_language_test_score') }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Cost Of Living</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="cost_of_living"
                                        value="{{ old('cost_of_living') }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Program Level</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="program_level"
                                        value="{{ old('program_level') }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Application Open Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="application_open_date"
                                        value="{{ old('application_open_date') }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Application Deadline</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="application_deadline"
                                        value="{{ old('application_deadline') }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-3 col-form-label" for="exampleTextarea1">Description</label>
                                <textarea class="form-control" id="exampleTextarea1" name="description" rows="4"></textarea>
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
