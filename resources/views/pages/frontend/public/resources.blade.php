@extends('layouts.fe-guest')
@section('content')
    <!-- Header inner Title -->
    <section class="header-banner-box">
        <div class="container">
            <div class="row">

                <div class="header-abroad-main">
                    <div class="col-lg-6">
                        <div class="header-abroad-content">
                            <h1>Country Guides</h1>
                            <p>Learn About Each Country, Its Education System, The Admissions Process, Study Costs, And
                                More, To Help Students Get Accepted And Study Abroad.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="header-img-abroad">
                            <img src="{{ asset('assets/frontend/assets/images/inner-banner/resources-banner.png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Header inner Title End -->

    <!-- Resources -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-blog-pt-pb">
                        <h2>Resources</h2>
                        <p>Helpful Materials And Information About Studying Abroad.</p>
                    </div>
                </div>

                <div class="col-6 col-lg-4">
                    <div class="sub-university-spotlights-box">
                        <div class="sub-university-img-spotl">
                            <img src="{{ asset('assets/frontend/assets/images/resources/canada-guide.png') }}"
                                alt="" />
                        </div>
                        <a href="javascript:;">Canada Guide</a><br>
                        <a href="javascript:;">View Guide </a>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="sub-university-spotlights-box">
                        <div class="sub-university-img-spotl">
                            <img src="{{ asset('assets/frontend/assets/images/resources/united-states-guide.png') }}"
                                alt="" />
                        </div>
                        <a href="javascript:;">United States Guide</a><br>
                        <a href="javascript:;">View Guide </a>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="sub-university-spotlights-box">
                        <div class="sub-university-img-spotl">
                            <img src="{{ asset('assets/frontend/assets/images/resources/united-kingdom-guide.png') }}"
                                alt="" />
                        </div>
                        <a href="javascript:;">United Kingdom Guide</a><br>
                        <a href="javascript:;">View Guide </a>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="sub-university-spotlights-box">
                        <div class="sub-university-img-spotl">
                            <img src="{{ asset('assets/frontend/assets/images/resources/australia-guide.png') }}"
                                alt="" />
                        </div>
                        <a href="javascript:;">Australia Guide</a><br>
                        <a href="javascript:;">View Guide </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Resources End -->
@endsection
