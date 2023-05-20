@extends('layouts.fe-guest')
@section('content')
    <div class="col-lg-12">
        <div class="sub-login-welcome-text">
            <h3>Welcome</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet.</p>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="sub-login-white-bg">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="sub-login-content">
                        <h4>Register</h4>
                    </div>
                    <div class="sub-login-form">
                        <form class="form-sample" action="{{ route('student-registration') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                @include('theme.components.backend.errors', ['errors' => $errors])
                            @endif
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}"
                                        class="form-control" placeholder="First Name" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="middle_name" value="{{ old('middle_name') }}"
                                        class="form-control" placeholder="Middle Name" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}"
                                        class="form-control" placeholder="Last Name" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-envelope"></i>
                                        </div>
                                    </div>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                        placeholder="Email" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                    <select class="form-control" name="gender" required>
                                        <option value=""> Select Gender</option>
                                        <option value="Male"> Male </option>
                                        <option value="FeMale"> FeMale </option>
                                        <option value="Other"> Others </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-calendar"></i>
                                        </div>
                                    </div>
                                    <input type="date" name="dob" value="{{ old('dob') }}" class="form-control"
                                        placeholder="Date of birth">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-globe"></i>
                                        </div>
                                    </div>
                                    <select class="form-control" name="country_code" required>
                                        @forelse ($countries as $country)
                                            <option value="{{ $country->dial_code }}">{{ $country->dial_code }}</option>
                                        @empty
                                            <option value="">No Country Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </div>
                                    <input type="number" class="form-control" name="mobile_number"
                                        value="{{ old('mobile_number') }}" placeholder="Mobile Number" minlength="10"
                                        maxlength="10">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-globe"></i>
                                        </div>
                                    </div>
                                    <select class="form-control" name="country" required>
                                        @forelse ($countries as $country)
                                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                                        @empty
                                            <option value="">No Country Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                    <select class="form-control" name="state" required>
                                        <option value=""> Select State</option>
                                        <option value="wb"> West Bengal </option>
                                        <option value="dl"> Delhi </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-check mt-4">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I have read and
                                        agree to the Terms and Conditions and the Privacy and Cookies
                                        Policy*.</label>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button class="btn btn-primary" type="submit">Create Account</button>
                            </div>
                        </form>
                    </div>

                    <div class="sub-login-social-or">
                        <span>or</span>
                    </div>

                    <div class="col-lg-12">
                        <p class="sub-already-login-btn">Already have an account? <a href="javascript:;">Login</a></p>
                    </div>

                    <div class="sub-login-social-main">

                        <a class="sub-login-social-box" href="{{ route('social.google') }}">
                            <span><i class="fa-brands fa-google"></i></span>
                            <p>Log In with Google</p>
                        </a>
                        <a class="sub-login-social-box" href="javascript:;">
                            <span><i class="fa-brands fa-apple"></i></span>
                            <p>Log In with Apple</p>
                        </a>
                        <a class="sub-login-social-box" href="javascript:;">
                            <span><i class="fa-brands fa-facebook-f"></i></span>
                            <p>Log In with Facebook</p>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
