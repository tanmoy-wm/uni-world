@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Profile
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    {{-- <a href="{{ route('categories.create') }}" class="btn btn-gradient-primary btn-icon-text">
                        <i class="mdi mdi-account-multiple-plus"></i> Add Course </a> --}}
                    <!-- <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> -->
                </li>
            </ul>
        </nav>
    </div>


    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                {{-- <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p> --}}
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" value="{{ old('name') ?? $user->name }}" class="form-control"
                            id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" value="{{ old('email') ?? $user->email }}"
                            id="exampleInputEmail3" placeholder="Email">
                    </div>


                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Change Password</h4>
                {{--
                <p class="card-description"> Basic form elements </p> --}}
                <form class="forms-sample" action="{{ route('auth.changePassword') }}" method="POST">
                    @csrf
                    {{-- <p><b>Change Password</b></p> --}}
                    <div class="form-group">
                        <label for="exampleInputPassword4">Old Password</label>
                        <input type="password" required name="current_password" class="form-control"
                            id="exampleInputPassword4" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">New Password</label>
                        <input type="password" required name="new_password" class="form-control" id="exampleInputPassword4"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Confirm Password</label>
                        <input type="password" required name="new_password_confirmation" class="form-control"
                            id="exampleInputPassword4" placeholder="Password">
                    </div>




                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
