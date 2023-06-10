@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-multiple-outline"></i>
            </span> Pages
        </h3>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Pages</h4>
                <form class="form-sample" action="{{ route('pages.update', ['id' => $page->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        @include('theme.components.backend.errors', ['errors' => $errors])
                    @endif

                    <p class="card-description"></p>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" value="{{ $page->title }}"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> External Link</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="external_link"
                                    value="{{ $page->external_link }}" required />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Meta Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="meta_title" value="{{ $page->meta_title }}" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Key Word</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="key_word" value="{{ $page->key_word }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-3 col-form-label" for="exampleTextarea1">Meta Description</label>
                                <textarea class="form-control" id="exampleTextarea1" name="meta_description" rows="4" >{{ $page->meta_description }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="is_active" required>
                                        <option {{ $page->is_active === 1 ? 'selected' : '' }} value="active">Active
                                        </option>
                                        <option {{ $page->is_active === 0 ? 'selected' : '' }} value="inactive">In Active
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Thumbnails</label>
                                <div class="col-sm-9">
                                    <input type="file" name="thumbnail" value="{{ $page->thumbnail }}">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="ckeditor form-control" rows="4" name="description" >{{ $page->description }}</textarea>
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
