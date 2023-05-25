@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-multiple-outline"></i>
            </span> Blogs
        </h3>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Blogs</h4>
                <form class="form-sample" action={{ route('blogs.store') }} method="POST">
                    @csrf
                    @if ($errors->any())
                        @include('theme.components.backend.errors', ['errors' => $errors])
                    @endif

                    <p class="card-description"></p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title" value="" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> External Link</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="external_link" value=""
                                        required />
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


                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">

                                    <textarea class="ckeditor form-control" rows="4" name="description"></textarea>
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


<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>
