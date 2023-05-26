@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-multiple-outline"></i>
            </span> Category
        </h3>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Category</h4>
                <form class="form-sample" action={{ route('categories.update', ['id' => $category->id]) }} method="POST">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        @include('theme.components.backend.errors', ['errors' => $errors])
                    @endif

                    <p class="card-description"></p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name') ?? $category->name }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleTextarea1">Textarea</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="is_active" required>
                                        <option value="active" {{ $category->is_active == 1 ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="inactive" {{ $category->is_active == 0 ? 'selected' : '' }}>In Active
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Parent</label>
                                <div class="col-sm-9">

                                    <select class="form-control" name="parent_id">
                                        <option value="">Select Parent Category</option>
                                        @forelse ($categories as $category_item)
                                            <option value="{{ $category_item->id }}"
                                                {{ $category_item->id === $category->parent_id ? 'selected' : '' }}>
                                                {{ $category_item->name }}
                                            </option>
                                        @empty
                                            <option value="">No Parent Category</option>
                                        @endforelse
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
