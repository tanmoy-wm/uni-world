@extends('layouts.fe-guest')
@section('content')
    <!-- Header inner Title -->
    <section class="header-banner-box">
        <div class="container">
            <div class="row">

                <div class="header-abroad-main">
                    <div class="col-lg-6">
                        <div class="header-abroad-content">
                            <h1>Our Story</h1>
                            <p>Uniwolc Empowers People Around The World To Access The Best Education. We Are The World’s
                                Largest Online Platform For International Student Recruitment. Founded In 2015, The Company
                                Has Built Partnerships With Over 1,600+ Primary, Secondary, And Post-Secondary Schools, And
                                Works With Over 10,000+ Recruitment Partners To Drive Diversity On Campuses Across Canada,
                                The United States, The United Kingdom, And Australia. Uniwolc Has 1,500+ Team Members In 30+
                                Countries.</p>
                            <a href="javascript:;">Join Us</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="header-img-abroad">
                            <img src="{{ asset('assets/frontend/assets/images/inner-banner/press-banner.png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Header inner Title End -->

    <!-- Awards -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-choose-tt-pd">
                        <h2>Accomplishments</h2>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sub-awards-logo-box">
                        <div class="sub-awards-logo">
                            <img src="{{ asset('assets/frontend/assets/images/awards-logo/01-awards-logo.png') }}"
                                alt="" />
                        </div>
                        <p>2021 | 2020</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sub-awards-logo-box">
                        <div class="sub-awards-logo">
                            <img src="{{ asset('assets/frontend/assets/images/awards-logo/02-awards-logo.png') }}"
                                alt="" />
                        </div>
                        <p>2021 | 2020 | 2019</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sub-awards-logo-box">
                        <div class="sub-awards-logo">
                            <img src="{{ asset('assets/frontend/assets/images/awards-logo/03-awards-logo.png') }}"
                                alt="" />
                        </div>
                        <p>2021</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Awards End -->

    <!-- Top Trends for 2022 and Beyond -->
    <section class="sub-new-awolc-bg">
        <div class="container">
            <div class="row">

                <div class="sub-best-programs-box">
                    <div class="col-lg-6">
                        <div class="sub-best-programs-content sub-intern-wd-btn">
                            <h2>Top Trends for 2022 and Beyond</h2>
                            <p class="pt-0">The COVID-19 Pandemic Forced The International Education Sector To Adapt At An
                                Unprecedented Rate. But Which Changes Are Temporary, And Which Are Poised To Last?</p>
                            <a href="javascript:;">Read Full Report</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="sub-best-img-programs">
                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal"><img
                                    src="{{ asset('assets/frontend/assets/images/trends-for-2022.png') }}"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Top Trends for 2022 and Beyond End -->

    <!-- Coverage -->
    <section class="sub-new-awolc-bg pt-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title">
                        <h2>Coverage</h2>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="sub-awolc-tab">

                        <div class="demo">
                            <div role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-justified nav-tabs-dropdown open" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="{{ url('press/featured') }}">Featured</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="{{ url('press/award') }}">Awards</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="{{ url('press/leadership') }}">Leadership</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">

                                    <!-- Featured -->
                                    <div role="tabpanel" class="tab-pane active show" id="01Featured">
                                        <div class="row">
                                            @foreach ($presses as $press)
                                                <div class="col-lg-6">
                                                    <div class="sub-coverage-box">
                                                        <h5>{{ $press->title }} </h5>
                                                        <p>{!! $press->description !!}</p>
                                                        <hr>
                                                        <h6><span class="text-muted m-3 text-small">
                                                                {{ \Carbon\Carbon::parse($press->created_at)->format('d F Y') }}</span>
                                                        </h6>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- Featured End -->

                                    <!-- Awards -->
                                    <div role="tabpanel" class="tab-pane" id="02Awards">
                                        <div class="row">
                                            @foreach ($presses as $press)
                                                <div class="col-lg-6">
                                                    <div class="sub-coverage-box">
                                                        <h5><span>{{ $press->award_name }}</span>{{ $press->award }}
                                                        </h5>
                                                        <p>{!! $press->award !!}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- Awards End -->

                                        <!-- Leadership -->
                                        <div role="tabpanel" class="tab-pane" id="03Leadership">
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="sub-coverage-box">
                                                        <h5><span>JULY 2022</span> HEPI</h5>
                                                        <p>How International Students Can Help Bridge The Uk’s Skills Gap
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="sub-coverage-box">
                                                        <h5><span>OCT 2022</span> TIMES OF INDIA</h5>
                                                        <p>Canada Addresses Labour Shortage: International Students Allowed
                                                            To
                                                            Work Unrestricted Hours</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="sub-coverage-box">
                                                        <h5><span>NOV 2022</span> BNN BLOOMBERG</h5>
                                                        <p>We Want To Empower Students To Make The Right Choice: Uniwolc
                                                            Massi
                                                            Basiri</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="sub-coverage-box">
                                                        <h5><span>MAR 2022</span> THE RECORD</h5>
                                                        <p>Our Program Is Designed To Benefit International Students</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="sub-coverage-box">
                                                        <h5><span>MAR 2022</span> BETAKIT</h5>
                                                        <p>Uniwolc Makes First Acquisition, Grabbing Panda Portal To Train
                                                            Recruiters</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="sub-coverage-box">
                                                        <h5><span>FEB 2022</span> FINANCIAL POST</h5>
                                                        <p>New Tool Helps Canadian Higher Education Institutions Navigate
                                                            The
                                                            Global Talent Competition</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Leadership End -->

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
    </section>
    <!-- Coverage End -->

    <!-- Accomplishments -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-choose-tt-pd">
                        <h2>Accomplishments</h2>
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <div class="sub-making-edu-content">
                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal"><img
                                src="{{ asset('assets/frontend/assets/images/01-accomplishments.png') }}"
                                alt="" /></a>
                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="sub-making-edu-content">
                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal"><img
                                src="{{ asset('assets/frontend/assets/images/02-accomplishments.png') }}"
                                alt="" /></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Accomplishments End -->

    <!-- Press Contact -->
    <section class="sub-have-quest-pt-pb sub-press-pt-pb">
        <div class="container">
            <div class="row">


                <div class="col-lg-12">
                    <div class="sub-count-number-bg">
                        <div class="sub-abroad-text-std">
                            <h5>Press Contact</h5>
                            <p><strong>Alessandra Manieri</strong><br /> Manager, Public Relations</p>
                            <p><i class="fa-solid fa-phone"></i> 1-844-972-7759 &nbsp;&nbsp;&nbsp; <i
                                    class="fa-solid fa-envelope"></i> Press@Uniwolc.Com</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Press Contact End -->
@endsection
