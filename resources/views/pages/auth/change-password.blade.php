@extends('layouts.fe-auth')
@section('content')
    <div class="container">
        <div class="card d-grid gap-2 d-md-flex justify-content-md-center mt-5">
            <div class="card-body">
                <h5 class="card-title">Change Password</h5>
                <form action="{{ route('auth.change-password') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Curernt Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="current_password" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">New Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="new_password" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Confirm New Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="new_password_confirmation" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
