@extends('layouts.fe-guest')
@section('content')
    <!-- Header inner Title -->
    <section class="header-banner-box">
        <div class="container">
            <div class="row">

                <div class="header-abroad-main">
                    <div class="col-lg-6">
                        <div class="header-abroad-content">
                            <h1>Uniwolc Blog</h1>
                            <p>Tips, Advice, And Updates To Help You Across Every Step Of The Study Abroad Journey.</p>
                            <a href="javascript:;">View All Articles</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="header-img-abroad">
                            <img src="{{ asset('assets/frontend/assets/images/inner-banner/blogs-banner.png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Header inner Title End -->

    <!-- Latest Resources -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-blog-pt-pb">
                        <h2>Recent Articles</h2>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="main-universities-blog">
                        <div class="sub-img-universities">
                            <img src="{{ asset('assets/frontend/assets/images/blogs/02-blog.png') }}" alt="" />
                        </div>
                        <div class="sub-content-universities">
                            <h3><a href="javascript:;">Quiz: What Length Program Should You Choose For Study Abroad In
                                    Canada?</a></h3>
                            <p>DECEMBER 12, 2022</p>
                            <a href="javascript:;">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="main-universities-blog">
                        <div class="sub-img-universities">
                            <img src="{{ asset('assets/frontend/assets/images/blogs/02-blog.png') }}" alt="" />
                        </div>
                        <div class="sub-content-universities">
                            <h3><a href="javascript:;">Quiz: What Length Program Should You Choose For Study Abroad In
                                    Canada?</a></h3>
                            <p>DECEMBER 12, 2022</p>
                            <a href="javascript:;">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="main-universities-blog">
                        <div class="sub-img-universities">
                            <img src="{{ asset('assets/frontend/assets/images/blogs/02-blog.png') }}" alt="" />
                        </div>
                        <div class="sub-content-universities">
                            <h3><a href="javascript:;">Quiz: What Length Program Should You Choose For Study Abroad In
                                    Canada?</a></h3>
                            <p>DECEMBER 12, 2022</p>
                            <a href="javascript:;">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="main-universities-blog">
                        <div class="sub-img-universities">
                            <img src="{{ asset('assets/frontend/assets/images/blogs/02-blog.png') }}" alt="" />
                        </div>
                        <div class="sub-content-universities">
                            <h3><a href="javascript:;">Quiz: What Length Program Should You Choose For Study Abroad In
                                    Canada?</a></h3>
                            <p>DECEMBER 12, 2022</p>
                            <a href="javascript:;">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="main-universities-blog">
                        <div class="sub-img-universities">
                            <img src="{{ asset('assets/frontend/assets/images/blogs/02-blog.png') }}" alt="" />
                        </div>
                        <div class="sub-content-universities">
                            <h3><a href="javascript:;">Quiz: What Length Program Should You Choose For Study Abroad In
                                    Canada?</a></h3>
                            <p>DECEMBER 12, 2022</p>
                            <a href="javascript:;">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="main-universities-blog">
                        <div class="sub-img-universities">
                            <img src="{{ asset('assets/frontend/assets/images/blogs/02-blog.png') }}" alt="" />
                        </div>
                        <div class="sub-content-universities">
                            <h3><a href="javascript:;">Quiz: What Length Program Should You Choose For Study Abroad In
                                    Canada?</a></h3>
                            <p>DECEMBER 12, 2022</p>
                            <a href="javascript:;">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="sub-explore-btn">
                        <a class="sub-get-started-btn" href="javascript:;">See More Articles</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Latest Resources End -->

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
