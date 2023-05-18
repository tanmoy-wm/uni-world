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
                        <form>
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-envelope"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-globe"></i>
                                        </div>
                                    </div>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Nationality</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><img width="20px"
                                                src="{{ asset('assets/frontend/assets/images/canada-contact.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="+1 204-234-5678">
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

                        <a class="sub-login-social-box" href="javascript:;">
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
