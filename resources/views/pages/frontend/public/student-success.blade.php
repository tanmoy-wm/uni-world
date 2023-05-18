@extends('layouts.fe-guest')
@section('content')
    <!-- Header inner Title -->
    <section class="header-banner-box">
        <div class="container">
            <div class="row">
                <div class="header-abroad-main">
                    <div class="col-lg-6">
                        <div class="header-abroad-content">
                            <h1>Student Success</h1>
                            <p>Increase The Chances Of Your Student Receiving A Letter Of Acceptance With These Helpful
                                Tips.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="header-img-abroad">
                            <img src="{{ asset('assets/frontend/assets/images/inner-banner/student-success-banner.png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Header inner Title End -->

    <!-- Student Success -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="sub-how-we-help-main sub-advisory-pt-pb">
                    <div class="col-lg-6">
                        <div class="sub-best-img-programs sub-best-img-programs-mt-0">
                            <img src="{{ asset('assets/frontend/assets/images/application-requirements-101.png') }}"
                                alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-how-we-help-content sub-studt-abroad-btn">
                            <h3>Application Requirements 101</h3>
                            <p>Find An Overview Of Application Requirements Throughout Canada, The United States, The United
                                Kingdom, Australia, And Ireland.</p>
                            <p class="pt-0">Find An Overview Of Application Requirements Throughout Canada, The United
                                States, The United Kingdom, And Australia.</p>
                        </div>
                    </div>
                </div>

                <div class="sub-application-box">

                    <div class="col-lg-6">
                        <div class="sub-application-icon-box sub-std-applit">
                            <div class="sub-application-img-icon"><img
                                    src="{{ asset('assets/frontend/assets/images/application-flag/canada.png') }}"
                                    alt="" /></div>
                            <div>
                                <h6>Canada Application Requirements</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-application-icon-box sub-std-applit">
                            <div class="sub-application-img-icon"><img
                                    src="{{ asset('assets/frontend/assets/images/application-flag/us.png') }}"
                                    alt="" /></div>
                            <div>
                                <h6>US Application Requirements</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-application-icon-box sub-std-applit">
                            <div class="sub-application-img-icon"><img
                                    src="{{ asset('assets/frontend/assets/images/application-flag/uk.png') }}"
                                    alt="" /></div>
                            <div>
                                <h6>UK Application Requirements</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-application-icon-box sub-std-applit">
                            <div class="sub-application-img-icon"><img
                                    src="{{ asset('assets/frontend/assets/images/application-flag/australia.png') }}"
                                    alt="" /></div>
                            <div>
                                <h6>Australia Application Requirements</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-application-icon-box sub-std-applit">
                            <div class="sub-application-img-icon"><img
                                    src="{{ asset('assets/frontend/assets/images/application-flag/Ireland.png') }}"
                                    alt="" /></div>
                            <div>
                                <h6>Ireland Application Requirements</h6>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Student Success End -->
@endsection
