@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-multiple-outline"></i>
            </span> Courses
        </h3>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Courses</h4>
                <form class="form-sample" action={{ route('courses.store') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        @include('theme.components.backend.errors', ['errors' => $errors])
                    @endif

                    <p class="card-description"></p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                        required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleTextarea1">Textarea</label>
                                <textarea class="form-control" id="exampleTextarea1" name="description" rows="4"></textarea>
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

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Media</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="file[]" class="filepond"
                                            accept="image/jpg, image/jpeg, image/png" multiple data-max-file-size="3MB" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-gradient-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        FilePond.create(inputElement).setOptions({
            server: {
                process: './uploads/process',
                fetch: null,
                revert: null,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                }
            },
            allowMultiple: true,
        });
    </script>
@endsection
