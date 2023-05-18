@extends('layouts.fe-guest')
@section('content')
    <!-- Header inner Title -->
    <section class="header-banner-box">
        <div class="container">
            <div class="row">

                <div class="header-abroad-main">
                    <div class="col-lg-6">
                        <div class="header-abroad-content">
                            <h1>Welcome to Assist</h1>
                            <p>Please Log In To Access The Full Knowledge Base</p>
                            <a href="javascript:;">Login</a>
                        </div>
                        <div class="header-assist-content">
                            <p>Don’t Have An Uniwolc Login?</p>
                            <p>Register As A <a href="javascript:;">Recruitment</a> Partner Or <a
                                    href="javascript:;">Student</a>.</p>
                            <p>Are You An Uniwolc Employee? <a href="javascript:;">Login Here</a>.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="header-img-abroad">
                            <img src="{{ asset('assets/frontend/assets/images/inner-banner/study-in-canada-guide-banner.png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Header inner Title End -->

    <!-- Student Journey -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="sub-get-started-text sub-success-rec-box">
                        <img src="{{ asset('assets/frontend/assets/images/01-help-students.png') }}" alt="">
                        <h5>News Centre</h5>
                        <p>The Latest Industry And UniWolc News.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sub-get-started-text sub-success-rec-box">
                        <img src="{{ asset('assets/frontend/assets/images/02-help-students.png') }}" alt="">
                        <h5>Policies & Processes</h5>
                        <p>Information About UniWolc Policies, Fees, And Commissions.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sub-get-started-text sub-success-rec-box">
                        <img src="{{ asset('assets/frontend/assets/images/03-help-students.png') }}" alt="">
                        <h5>Student Success</h5>
                        <p>Increase The Chances Of Your Student Receiving A Letter Of Acceptance With These Helpful Tips.
                        </p>
                    </div>
                </div>

                <div class="sub-recruiters-pt">
                    <div class="col-lg-4">
                        <div class="sub-get-started-text sub-success-rec-box">
                            <img src="{{ asset('assets/frontend/assets/images/05-start-your-iourney.png') }}"
                                alt="">
                            <h5>Resources</h5>
                            <p>Helpful Materials And Information About Studying Abroad.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sub-get-started-text sub-success-rec-box sub-get-started-text-last">
                            <img src="{{ asset('assets/frontend/assets/images/04-apply-for-visa.png') }}" alt="">
                            <h5>Student Journey</h5>
                            <p>Discover All Of The Steps Required To Start Your Study Abroad Journey.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Student Journey End -->

    <!-- You’ll Learn About -->
    <section class="sub-new-awolc-bg">
        <div class="container">
            <div class="row">

                <div class="sub-how-we-help-main sub-advisory-pt-pb">
                    <div class="col-lg-6">
                        <div class="sub-best-img-programs">
                            <img src="{{ asset('assets/frontend/assets/images/featured-article.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-how-we-help-content">
                            <h3>Work With ApplyBoard</h3>
                            <p>ApplyBoard connects international students and recruitment partners to educational
                                opportunities at institutions around the world.</p>
                        </div>
                        <div class="sub-assist-btn">
                            <a href="javascript:;">Students</a>
                            <a href="javascript:;">Recruitments Partners</a>
                            <a href="javascript:;">Partner Schools</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="sub-count-number-bg sub-register-bg">
                        <div class="sub-abroad-text-std sub-assist-pt-pb">
                            <h5>Need Assistance? Contact Us!</h5>
                            <p>If you need assistance using Assist or have questions about ApplyBoard, we’re here to help!
                            </p>
                            <div class="sub-subscribe-form">
                                <button type="button" class="btn btn-primary">Get Support</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- You’ll Learn About End -->

    <!-- Play Video -->
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
    <!-- Play Video End -->

    <!-- Header Menu -->
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
@endsection
