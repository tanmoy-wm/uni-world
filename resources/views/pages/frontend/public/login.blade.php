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
                        <h4>Log In</h4>
                    </div>
                    <div class="sub-login-form">
                        <form class="pt-3" action="{{route('auth.login')}}" method='POST'>
                            @csrf
                            @if ($errors->any())
                               @include('theme.components.backend.errors', ['errors' => $errors])
                            @endif
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                                    </div>
                                    <input type="email" name="email" required class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <a href="javascript:;">Forgot Password?</a>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                    </div>

                    <div class="sub-login-social-or">
                        <span>or</span>
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

    <!-- Play Video Modal -->
    <div class="modal-popup-vd">
        <div class="modal fade VideoPopup" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Study Abroad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe width="100%" src="https://www.youtube.com/embed/hRTi1Elkz3U" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Play Video Modal End -->

    <script>
        $(document).ready(function() {
            // executes when HTML-Document is loaded and DOM is ready
            // breakpoint and up
            $(window).resize(function() {
                if ($(window).width() >= 980) {
                    // when you hover a toggle show its dropdown menu
                    $(".navbar .dropdown-toggle").hover(function() {
                        $(this).parent().toggleClass("show");
                        $(this).parent().find(".dropdown-menu").toggleClass("show");
                    });

                    // hide the menu when the mouse leaves the dropdown
                    $(".navbar .dropdown-menu").mouseleave(function() {
                        $(this).removeClass("show");
                    });

                    // do something here
                }
            });
        });
    </script>
    <!-- Header Menu End -->

    <!-- New on Awolc Tab -->
    <script>
        $('.nav-tabs-dropdown')
            .on("click", "li:not('.active') a", function(event) {
                $(this).closest('ul').removeClass("open");
            })
            .on("click", "li.active a", function(event) {
                $(this).closest('ul').toggleClass("open");
            });
    </script>
    <!-- New on Awolc Tab End -->

    <!-- dropdown menu btn -->
    <script>
        $('.dropdown-toggle').dropdown()
    </script>
    <!-- dropdown menu btn end -->

    <!-- Modal Video -->
    <script language="JavaScript">
        $(".VideoPopup").on('hidden.bs.modal', function(e) {
            $(".VideoPopup iframe").attr("src", $(".VideoPopup iframe").attr("src"));
        });
    </script>
    <!-- Modal Video End -->

    <!-- JavaScript End -->
@endsection
