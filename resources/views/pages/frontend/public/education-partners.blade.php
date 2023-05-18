@extends('layouts.fe-guest')
@section('content')
    <!-- Header inner Title -->
    <section class="header-banner-box">
        <div class="container">
            <div class="row">

                <div class="header-abroad-main">
                    <div class="col-lg-6">
                        <div class="header-abroad-content">
                            <h1>Be Seen by 100,000+ Students Every Month</h1>
                            <p>Increase Your Global Presence And The Number Of Qualified Students From A Single, Easy-To-Use
                                Platform Trusted By More Than 1,600 Institutions Worldwide.</p>
                            <a href="javascript:;">Work With Us</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="header-img-abroad">
                            <img src="{{ asset('assets/frontend/assets/images/inner-banner/education-partners-banner.png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Header inner Title End -->

    <!-- Our Success GROWTH -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="sub-get-started-text sub-success-rec-box">
                        <img src="{{ asset('assets/frontend/assets/images/01-help-students') }}.png" alt="" />
                        <h5>Quality Applications</h5>
                        <p>For Every Hundred Students, We Get Fifteen More Enrolled Than Others.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sub-get-started-text sub-success-rec-box">
                        <img src="{{ asset('assets/frontend/assets/images/02-help-students.png') }}" alt="" />
                        <h5>Unmatched Diversity</h5>
                        <p>UNIWOLC Students Come From More Than 125 Countries.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sub-get-started-text sub-success-rec-box sub-get-started-text-last">
                        <img src="{{ asset('assets/frontend/assets/images/03-help-students.png') }}" alt="" />
                        <h5>Less administration. More education</h5>
                        <p>Partner Schools Spend 25% More Time On Things That Matter.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Success GROWTH End -->

    <!-- Access More Schools, Perks & Faster Commissions -->
    <section class="sub-new-awolc-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-choose-tt-pd">
                        <h2>Our Impact</h2>
                        <p>Helping Connect Top Schools With Students From Around The World, And Delivering Results Along The
                            Way.</p>
                    </div>
                </div>

                <div class="col-6 col-lg-4">
                    <div class="sub-choose-box">
                        <div class="sub-img-choose">
                            <img src="{{ asset('assets/frontend/assets/images/why-choose/best-commissions.png') }}"
                                alt="" />
                        </div>
                        <h4>400,000+</h4>
                        <p>Students Helped</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="sub-choose-box">
                        <div class="sub-img-choose">
                            <img src="{{ asset('assets/frontend/assets/images/why-choose/perks-rewards.png') }}"
                                alt="" />
                        </div>
                        <h4>125+</h4>
                        <p>Student Source Countries</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="sub-choose-box">
                        <div class="sub-img-choose">
                            <img src="{{ asset('assets/frontend/assets/images/why-choose/03-school.png') }}"
                                alt="" />
                        </div>
                        <h4>95%</h4>
                        <p>Offer Of Admission Rate</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Access More Schools, Perks & Faster Commissions End -->

    <!-- Success Stories From Our Partners -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title">
                        <h2>Success Stories From Our Partners</h2>
                    </div>
                </div>

                <div class="sub-making-education-pt-pb">
                    <div class="col-6 col-lg-6">
                        <div class="sub-making-edu-content">
                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal"><img
                                    src="{{ asset('assets/frontend/assets/images/03-success-stories.png') }}"
                                    alt="" /></a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6">
                        <div class="sub-making-edu-content">
                            <a href="javascript:;" data-toggle="modal" data-target="#exampleModal"><img
                                    src="{{ asset('assets/frontend/assets/images/04-success-stories.png') }}"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Success Stories From Our Partners End -->

    <!-- How It Works -->
    <section class="sub-new-awolc-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-choose-tt-pd">
                        <h2>How It Works</h2>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sub-get-started-text sub-how-work-pb sub-how-it-work-height">
                        <img src="{{ asset('assets/frontend/assets/images/01-help-students') }}.png" alt="" />
                        <h5>Students Check Their Eligibility</h5>
                        <p>Students Complete A Short Survey And Get Matched To Programs And Schools.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sub-get-started-text sub-how-work-pb sub-how-it-work-height">
                        <img src="{{ asset('assets/frontend/assets/images/02-help-students.png') }}" alt="" />
                        <h5>Students Apply to Schools</h5>
                        <p>Students Select A School And Program, Complete Their Profile, Pay Their Fees, And Submit The
                            Proper Documentation.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sub-get-started-text sub-how-work-pb sub-how-it-work-height">
                        <img src="{{ asset('assets/frontend/assets/images/03-help-students.png') }}" alt="" />
                        <h5>Students Get Accepted</h5>
                        <p>The Application Is Reviewed By The School And A Letter Of Acceptance Is Issued.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sub-get-started-text sub-how-work-pb sub-how-it-work-height">
                        <img src="{{ asset('assets/frontend/assets/images/04-apply-for-visa.png') }}" alt="" />
                        <h5>Student Applies for Visa</h5>
                        <p>UNIWOLC Experts Guide The Student Through The Visa Application Process.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sub-get-started-text sub-how-work-pb sub-how-it-work-height">
                        <img src="{{ asset('assets/frontend/assets/images/05-start-your-iourney.png') }}" alt="" />
                        <h5>Student Journey Begins</h5>
                        <p>The Student Sets Off With Bags Packed Ready To Start Their Adventure On Your Campus.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sub-how-work-btn">
                        <a class="sub-get-started-btn" href="javascript:;">Get Started</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- How It Works End -->

    <!-- Ecosystem of International Education -->
    <section class="sub-intern-education-bg sub-mb">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-intern-education-title">
                        <h2>We are Invested in Caring for You and the Ecosystem of International Education</h2>
                    </div>
                </div>

                <div class="sub-intern-educat-pt-pb">

                    <div class="col-lg-3">
                        <div class="sub-intern-educat-box">
                            <img src="{{ asset('assets/frontend/assets/images/ecosystem-international-education/local-support.png') }}"
                                alt="" />
                            <h6>Vetted, Offer-Read Applications, Delivered</h6>
                            <p>Reduce Your Workload On Application Processing And Follow-Ups.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sub-intern-educat-box">
                            <img src="{{ asset('assets/frontend/assets/images/ecosystem-international-education/education.png') }}"
                                alt="" />
                            <h6>Putting Students First</h6>
                            <p>Founded By Students For Students—We Care About Every Aspect Of The Student Journey.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sub-intern-educat-box">
                            <img src="{{ asset('assets/images/ecosystem-international-education/events-and-webinars.png') }}"
                                alt="" />
                            <h6>Flexible Delivery</h6>
                            <p>We Match Your Processes And Requirements—There Is No Need For Integration.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sub-intern-educat-box">
                            <img src="{{ asset('assets/frontend/assets/images/ecosystem-international-education/data-and-insights.png') }}"
                                alt="" />
                            <h6>Work With You, For You</h6>
                            <p>Our Aim Is To Free Up Your Time And Resources. We Help You Recruit Efficiently And
                                Effectively.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Ecosystem of International Education End -->

    <!-- Expanding Our International Reach -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-choose-tt-pd">
                        <h2>Expanding Our International Reach</h2>
                        <p>Attract The Best Students From Around The World With Applyboard.</p>
                    </div>
                </div>

                <div class="sub-easy-to-use-main">

                    <div class="col-6 col-lg-4">
                        <div class="sub-easy-to-use-box sub-expanding-hgt">
                            <img src="{{ asset('assets/frontend/assets/images/01-expanding.png') }}" alt="" />
                            <h6>Increase Student Diversity</h6>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4">
                        <div class="sub-easy-to-use-box sub-expanding-hgt">
                            <img src="{{ asset('assets/frontend/assets/images/02-expanding.png') }}" alt="" />
                            <h6>Receive Quality Applications</h6>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4">
                        <div class="sub-easy-to-use-box sub-expanding-hgt">
                            <img src="{{ asset('assets/frontend/assets/images/03-expanding.png') }}" alt="" />
                            <h6>Approved Recruiter Network</h6>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4">
                        <div class="sub-easy-to-use-box sub-expanding-hgt">
                            <img src="{{ asset('assets/frontend/assets/images/01-expanding.png') }}" alt="" />
                            <h6>Document Verification</h6>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4">
                        <div class="sub-easy-to-use-box sub-expanding-hgt">
                            <img src="{{ asset('assets/frontend/assets/images/02-expanding.png') }}" alt="" />
                            <h6>Promotional Channels</h6>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4">
                        <div class="sub-easy-to-use-box sub-expanding-hgt">
                            <img src="{{ asset('assets/frontend/assets/images/03-expanding.png') }}" alt="" />
                            <h6>Applicant Matching</h6>
                        </div>
                    </div>

                </div>

                <div class="col-lg-12">
                    <div class="sub-explore-btn">
                        <a class="sub-get-started-btn" href="javascript:;">Let’s Get Started</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Expanding Our International Reach End -->

    <!-- A Relationship Built on Trust and Credibility -->
    <section class="sub-new-awolc-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title">
                        <h2>A Relationship Built on Trust and Credibility</h2>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="sub-relationship-testimonial">

                        <div id="testimonial4"
                            class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                            data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="testimonial4_slide">
                                        <div class="col-lg-4"><img
                                                src="{{ asset('assets/frontend/assets/images/testimonial/04-testimonial.png') }}"
                                                class="img-circle img-responsive" /></div>
                                        <div class="col-lg-8">
                                            <h4>Athena K.</h4>
                                            <span>University Of Waterloo Graduate – International Student From Iran</span>
                                            <p>“UNIWOLC Guided Me Through The Application Process To Make Sure It Went
                                                Smoothly. They Filled Me With Trust Because Their Communication Is So
                                                Strong. Applyboard Double-Checked Every Part Of My Application And Visa
                                                Requirements So That Everything Was Correct.”</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial4_slide">
                                        <div class="col-lg-4"><img
                                                src="{{ asset('assets/frontend/assets/images/testimonial/04-testimonial.png') }}"
                                                class="img-circle img-responsive" /></div>
                                        <div class="col-lg-8">
                                            <h4>Athena K.</h4>
                                            <span>University Of Waterloo Graduate – International Student From Iran</span>
                                            <p>“UNIWOLC Guided Me Through The Application Process To Make Sure It Went
                                                Smoothly. They Filled Me With Trust Because Their Communication Is So
                                                Strong. Applyboard Double-Checked Every Part Of My Application And Visa
                                                Requirements So That Everything Was Correct.”</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial4_slide">
                                        <div class="col-lg-4"><img
                                                src="{{ asset('assets/frontend/assets/images/testimonial/04-testimonial.png') }}"
                                                class="img-circle img-responsive" /></div>
                                        <div class="col-lg-8">
                                            <h4>Athena K.</h4>
                                            <span>University Of Waterloo Graduate – International Student From Iran</span>
                                            <p>“UNIWOLC Guided Me Through The Application Process To Make Sure It Went
                                                Smoothly. They Filled Me With Trust Because Their Communication Is So
                                                Strong. Applyboard Double-Checked Every Part Of My Application And Visa
                                                Requirements So That Everything Was Correct.”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#testimonial4" data-slide="prev"><i
                                    class="fa-solid fa-arrow-left"></i></a>
                            <a class="carousel-control-next" href="#testimonial4" data-slide="next"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- A Relationship Built on Trust and Credibility End -->

    <!-- Count Number -->
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="sub-count-number-bg sub-edu-pt-pb">
                    <div class="sub-count-number-box sub-expanding-number">
                        <h6>1,000+</h6>
                        <p>Globally</p>
                    </div>
                    <div class="sub-count-number-box sub-expanding-number">
                        <h6>250+</h6>
                        <p>South Asia</p>
                    </div>
                    <div class="sub-count-number-box sub-expanding-number">
                        <h6>25+</h6>
                        <p>South And East Asia, Africa & Latin America</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Count Number End -->

    <!-- Right School for Your Students -->
    <section class="sub-new-awolc-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title">
                        <h2>We Connect You to the Right School for Your Students</h2>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="sub-awolc-tab">

                        <div class="demo">
                            <div role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-justified nav-tabs-dropdown" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#Canada" class="active show" aria-controls="Canada" role="tab"
                                            data-toggle="tab"><img class="univ-img-ct"
                                                src="{{ asset('assets/frontend/assets/images/university-logo/canada.png') }}"
                                                alt="" />
                                            Canada</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#UnitedState" aria-controls="UnitedStates" role="tab"
                                            data-toggle="tab"><img class="univ-img-ct"
                                                src="{{ asset('assets/frontend/assets/images/university-logo/united-states.png') }}"
                                                alt="" />
                                            United States</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#UnitedKingdom" aria-controls="UnitedKingdom" role="tab"
                                            data-toggle="tab"><img class="univ-img-ct"
                                                src="{{ asset('assets/frontend/assets/images/university-logo/united-kingdom.png') }}"
                                                alt="" />
                                            United States</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#Australia" aria-controls="Australia" role="tab"
                                            data-toggle="tab"><img class="univ-img-ct"
                                                src="{{ asset('assets/frontend/assets/images/university-logo/australia.png') }}"
                                                alt="" /> United
                                            States</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">

                                    <!-- Canada -->
                                    <div role="tabpanel" class="tab-pane active show" id="Canada">
                                        <div class="row">

                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/01.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/02.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/03.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/04.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/05.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/06.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ 'assets/frontend/assets/images/university-logo/07.png' }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/08.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Canada End -->

                                    <!-- United States -->
                                    <div role="tabpanel" class="tab-pane" id="UnitedState">
                                        <div class="row">

                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/05.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/06.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/07.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/08.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/01.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/02.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/03.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/04.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- United States End -->

                                    <!-- united kingdom -->
                                    <div role="tabpanel" class="tab-pane" id="UnitedKingdom">
                                        <div class="row">

                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/01.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/02.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/03.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/04.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/05.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/06.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/07.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/08.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- united kingdom End -->

                                    <!-- Australia -->
                                    <div role="tabpanel" class="tab-pane" id="Australia">
                                        <div class="row">

                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/05.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/06.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/07.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/08.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/01.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/02.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/03.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-3">
                                                <div class="sub-university-logo-box">
                                                    <img src="{{ asset('assets/frontend/assets/images/university-logo/04.png') }}"
                                                        alt="" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Australia End -->

                                    <div class="col-lg-12">
                                        <div class="sub-explore-btn">
                                            <a class="sub-get-started-btn" href="javascript:;">Explore Institutions</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Right School for Your Students End -->

    <!-- Deliver Quality Applications -->
    <section class="sub-new-awolc-bg pt-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-choose-tt-pd">
                        <h2>An Easy-to-Use Platform Built to Deliver Quality Applications and More</h2>
                    </div>
                </div>

                <div class="sub-quality-applications-main">

                    <div class="col-lg-6">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="sub-intern-educat-box">
                                    <img src="{{ asset('assets/frontend/assets/images/ecosystem-international-education/local-support.png') }}"
                                        alt="" />
                                    <h6>Vetted, Offer-Read Applications, Delivered</h6>
                                    <p>Reduce Your Workload On Application Processing And Follow-Ups.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="sub-intern-educat-box">
                                    <img src="{{ asset('assets/frontend/assets/images/ecosystem-international-education/education.png') }}"
                                        alt="" />
                                    <h6>Putting Students First</h6>
                                    <p>Founded By Students For Students—We Care About Every Aspect Of The Student Journey.
                                    </p>
                                </div>
                            </div>
                            <div class="sub-quality-applications-two">
                                <div class="col-lg-6">
                                    <div class="sub-intern-educat-box">
                                        <img src="{{ asset('assets/frontend/assets/images/ecosystem-international-education/events-and-webinars.png') }}"
                                            alt="" />
                                        <h6>Flexible Delivery</h6>
                                        <p>We Match Your Processes And Requirements—There Is No Need For Integration.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sub-intern-educat-box">
                                        <img src="{{ asset('assets/frontend/assets/images/ecosystem-international-education/data-and-insights.png') }}"
                                            alt="" />
                                        <h6>Work With You, For You</h6>
                                        <p>Our Aim Is To Free Up Your Time And Resources. We Help You Recruit Efficiently
                                            And Effectively.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="sub-quality-applications-two">
                            <img src="{{ asset('assets/frontend/assets/images/quality-applications.png') }}"
                                alt="" />
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Deliver Quality Applications End -->

    <!-- Partnership Request -->
    <section class="sub-how-we-help-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sub-uniwolc-title sub-choose-tt-pd">
                        <h2>Access The Guide</h2>
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-3">
                    <div class="row">

                        <div class="sub-access-guide-form">
                            <form>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Destination Country*</label>
                                        <select class="form-control">
                                            <option value="" selected="selected">-- select Destination Country --
                                            </option>
                                            <option value="Afghanistan">Afghanistan </option>
                                            <option value="Albania">Albania </option>
                                            <option value="Algeria">Algeria </option>
                                            <option value="American Samoa">American Samoa </option>
                                            <option value="Andorra">Andorra </option>
                                            <option value="Angola">Angola </option>
                                            <option value="Anguilla">Anguilla </option>
                                            <option value="Antarctica">Antarctica </option>
                                            <option value="Antigua And Barbuda">Antigua And Barbuda </option>
                                            <option value="Argentina">Argentina </option>
                                            <option value="Armenia">Armenia </option>
                                            <option value="Aruba">Aruba </option>
                                            <option value="Australia">Australia </option>
                                            <option value="Austria">Austria </option>
                                            <option value="Azerbaijan">Azerbaijan </option>
                                            <option value="Bahamas">Bahamas </option>
                                            <option value="Bahrain">Bahrain </option>
                                            <option value="Bangladesh">Bangladesh </option>
                                            <option value="Barbados">Barbados </option>
                                            <option value="Belarus">Belarus </option>
                                            <option value="Belgium">Belgium </option>
                                            <option value="Belize">Belize </option>
                                            <option value="Benin">Benin </option>
                                            <option value="Bermuda">Bermuda </option>
                                            <option value="Bhutan">Bhutan </option>
                                            <option value="Bolivia">Bolivia </option>
                                            <option value="Bosnia And Herzegovina">Bosnia And Herzegovina </option>
                                            <option value="Botswana">Botswana </option>
                                            <option value="Bouvet Island">Bouvet Island </option>
                                            <option value="Brazil">Brazil </option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                            </option>
                                            <option value="British Virgin Islands">British Virgin Islands </option>
                                            <option value="Brunei Darussalam">Brunei Darussalam </option>
                                            <option value="Bulgaria">Bulgaria </option>
                                            <option value="Burkina Faso">Burkina Faso </option>
                                            <option value="Burundi">Burundi </option>
                                            <option value="Cambodia">Cambodia </option>
                                            <option value="Cameroon">Cameroon </option>
                                            <option value="Canada">Canada </option>
                                            <option value="Cape Verde">Cape Verde </option>
                                            <option value="Cayman Islands">Cayman Islands </option>
                                            <option value="Central African Republic">Central African Republic </option>
                                            <option value="Chad">Chad </option>
                                            <option value="Chile">Chile </option>
                                            <option value="China">China </option>
                                            <option value="Christmas Island">Christmas Island </option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands </option>
                                            <option value="Colombia">Colombia </option>
                                            <option value="Comoros">Comoros </option>
                                            <option value="Congo">Congo </option>
                                            <option value="Cook Islands">Cook Islands </option>
                                            <option value="Costa Rica">Costa Rica </option>
                                            <option value="Côte D'Ivoire">Côte D'Ivoire </option>
                                            <option value="Croatia">Croatia </option>
                                            <option value="Cuba">Cuba </option>
                                            <option value="Cyprus">Cyprus </option>
                                            <option value="Czech Republic">Czech Republic </option>
                                            <option value="Democratic Republic of Congo">Democratic Republic of Congo
                                            </option>
                                            <option value="Denmark">Denmark </option>
                                            <option value="description">description </option>
                                            <option value="displayOrder">displayOrder </option>
                                            <option value="Djibouti">Djibouti </option>
                                            <option value="Dominica">Dominica </option>
                                            <option value="Dominican Republic">Dominican Republic </option>
                                            <option value="doubleData">doubleData </option>
                                            <option value="Ecuador">Ecuador </option>
                                            <option value="Egypt">Egypt </option>
                                            <option value="El Salvador">El Salvador </option>
                                            <option value="Equatorial Guinea">Equatorial Guinea </option>
                                            <option value="Eritrea">Eritrea </option>
                                            <option value="Estonia">Estonia </option>
                                            <option value="Ethiopia">Ethiopia </option>
                                            <option value="Europe">Europe </option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">Faroe Islands </option>
                                            <option value="Fiji">Fiji </option>
                                            <option value="Finland">Finland </option>
                                            <option value="France">France </option>
                                            <option value="French Guiana">French Guiana </option>
                                            <option value="French Polynesia">French Polynesia </option>
                                            <option value="French Southern Territories">French Southern Territories
                                            </option>
                                            <option value="Gabon">Gabon </option>
                                            <option value="Gambia">Gambia </option>
                                            <option value="Georgia">Georgia </option>
                                            <option value="Germany">Germany </option>
                                            <option value="Ghana">Ghana </option>
                                            <option value="Gibraltar">Gibraltar </option>
                                            <option value="Greece">Greece </option>
                                            <option value="Greenland">Greenland </option>
                                            <option value="Grenada">Grenada </option>
                                            <option value="Guadeloupe">Guadeloupe </option>
                                            <option value="Guam">Guam </option>
                                            <option value="Guatemala">Guatemala </option>
                                            <option value="Guinea">Guinea </option>
                                            <option value="Guinea-Bissau">Guinea-Bissau </option>
                                            <option value="Guyana">Guyana </option>
                                            <option value="Haiti">Haiti </option>
                                            <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald
                                                Islands </option>
                                            <option value="hidden">hidden </option>
                                            <option value="Honduras">Honduras </option>
                                            <option value="Hong Kong">Hong Kong </option>
                                            <option value="Hungary">Hungary </option>
                                            <option value="Iceland">Iceland </option>
                                            <option value="India">India </option>
                                            <option value="Indonesia">Indonesia </option>
                                            <option value="Iran">Iran </option>
                                            <option value="Iraq">Iraq </option>
                                            <option value="Ireland">Ireland </option>
                                            <option value="Israel">Israel </option>
                                            <option value="Italy">Italy </option>
                                            <option value="Jamaica">Jamaica </option>
                                            <option value="Japan">Japan </option>
                                            <option value="Jordan">Jordan </option>
                                            <option value="Kazakhstan">Kazakhstan </option>
                                            <option value="Kenya">Kenya </option>
                                            <option value="Kiribati">Kiribati </option>
                                            <option value="Kosovo">Kosovo </option>
                                            <option value="Kuwait">Kuwait </option>
                                            <option value="Kyrgyzstan">Kyrgyzstan </option>
                                            <option value="label">label </option>
                                            <option value="Lao People'S Democratic Republic">Lao People'S Democratic
                                                Republic </option>
                                            <option value="Latvia">Latvia </option>
                                            <option value="Lebanon">Lebanon </option>
                                            <option value="Lesotho">Lesotho </option>
                                            <option value="Liberia">Liberia </option>
                                            <option value="Libya">Libya </option>
                                            <option value="Liechtenstein">Liechtenstein </option>
                                            <option value="Lithuania">Lithuania </option>
                                            <option value="Luxembourg">Luxembourg </option>
                                            <option value="Macao">Macao </option>
                                            <option value="Macedonia, The Former Yugoslav Republic Of">Macedonia, The
                                                Former Yugoslav Republic Of </option>
                                            <option value="Madagascar">Madagascar </option>
                                            <option value="Malawi">Malawi </option>
                                            <option value="Malaysia">Malaysia </option>
                                            <option value="Maldives">Maldives </option>
                                            <option value="Mali">Mali </option>
                                            <option value="Malta">Malta </option>
                                            <option value="Marshall Islands">Marshall Islands </option>
                                            <option value="Martinique">Martinique </option>
                                            <option value="Mauritania">Mauritania </option>
                                            <option value="Mauritius">Mauritius </option>
                                            <option value="Mayotte">Mayotte </option>
                                            <option value="Mexico">Mexico </option>
                                            <option value="Micronesia, Federated States Of">Micronesia, Federated States Of
                                            </option>
                                            <option value="Moldova">Moldova </option>
                                            <option value="Monaco">Monaco </option>
                                            <option value="Mongolia">Mongolia </option>
                                            <option value="Montserrat">Montserrat </option>
                                            <option value="Morocco">Morocco </option>
                                            <option value="Mozambique">Mozambique </option>
                                            <option value="Myanmar">Myanmar </option>
                                            <option value="Namibia">Namibia </option>
                                            <option value="Nauru">Nauru </option>
                                            <option value="Nepal">Nepal </option>
                                            <option value="Netherlands">Netherlands </option>
                                            <option value="Netherlands Antilles">Netherlands Antilles </option>
                                            <option value="New Caledonia">New Caledonia </option>
                                            <option value="New Zealand">New Zealand </option>
                                            <option value="Nicaragua">Nicaragua </option>
                                            <option value="Niger">Niger </option>
                                            <option value="Nigeria">Nigeria </option>
                                            <option value="Niue">Niue </option>
                                            <option value="Norfolk Island">Norfolk Island </option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands </option>
                                            <option value="North Korea">North Korea </option>
                                            <option value="Norway">Norway </option>
                                            <option value="Not Applicable">Not Applicable </option>
                                            <option value="Oman">Oman </option>
                                            <option value="Other">Other </option>
                                            <option value="Pakistan">Pakistan </option>
                                            <option value="Palau">Palau </option>
                                            <option value="Palestine">Palestine </option>
                                            <option value="Panama">Panama </option>
                                            <option value="Papua New Guinea">Papua New Guinea </option>
                                            <option value="Paraguay">Paraguay </option>
                                            <option value="Peru">Peru </option>
                                            <option value="Philippines">Philippines </option>
                                            <option value="Pitcairn">Pitcairn </option>
                                            <option value="Poland">Poland </option>
                                            <option value="Portugal">Portugal </option>
                                            <option value="Puerto Rico">Puerto Rico </option>
                                            <option value="Qatar">Qatar </option>
                                            <option value="readOnly">readOnly </option>
                                            <option value="Réunion">Réunion </option>
                                            <option value="Romania">Romania </option>
                                            <option value="Russia">Russia </option>
                                            <option value="Rwanda">Rwanda </option>
                                            <option value="Saint Helena">Saint Helena </option>
                                            <option value="Saint Kitts And Nevis">Saint Kitts And Nevis </option>
                                            <option value="Saint Lucia">Saint Lucia </option>
                                            <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon </option>
                                            <option value="Saint Vincent And The Grenadines">Saint Vincent And The
                                                Grenadines </option>
                                            <option value="Samoa">Samoa </option>
                                            <option value="San Marino">San Marino </option>
                                            <option value="Sao Tome And Principe">Sao Tome And Principe </option>
                                            <option value="Saudi Arabia">Saudi Arabia </option>
                                            <option value="Senegal">Senegal </option>
                                            <option value="Serbia And Montenegro">Serbia And Montenegro </option>
                                            <option value="Seychelles">Seychelles </option>
                                            <option value="Sierra Leone">Sierra Leone </option>
                                            <option value="Singapore">Singapore </option>
                                            <option value="Slovakia">Slovakia </option>
                                            <option value="Slovenia">Slovenia </option>
                                            <option value="Solomon Islands">Solomon Islands </option>
                                            <option value="Somalia">Somalia </option>
                                            <option value="South Africa">South Africa </option>
                                            <option value="South Georgia And South Sandwich Islands">South Georgia And
                                                South Sandwich Islands </option>
                                            <option value="South Korea">South Korea </option>
                                            <option value="Spain">Spain </option>
                                            <option value="Sri Lanka">Sri Lanka </option>
                                            <option value="Sudan">Sudan </option>
                                            <option value="Suriname">Suriname </option>
                                            <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen </option>
                                            <option value="Swaziland">Swaziland </option>
                                            <option value="Sweden">Sweden </option>
                                            <option value="Switzerland">Switzerland </option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic </option>
                                            <option value="Taiwan">Taiwan </option>
                                            <option value="Tajikistan">Tajikistan </option>
                                            <option value="Tanzania">Tanzania </option>
                                            <option value="Thailand">Thailand </option>
                                            <option value="Timor-Leste">Timor-Leste </option>
                                            <option value="Togo">Togo </option>
                                            <option value="Tokelau">Tokelau </option>
                                            <option value="Tonga">Tonga </option>
                                            <option value="Trinidad And Tobago">Trinidad And Tobago </option>
                                            <option value="Tunisia">Tunisia </option>
                                            <option value="Turkey">Turkey </option>
                                            <option value="Turkmenistan">Turkmenistan </option>
                                            <option value="Turks And Caicos Islands">Turks And Caicos Islands </option>
                                            <option value="Tuvalu">Tuvalu </option>
                                            <option value="U.S. Virgin Islands">U.S. Virgin Islands </option>
                                            <option value="Uganda">Uganda </option>
                                            <option value="Ukraine">Ukraine </option>
                                            <option value="United Arab Emirates">United Arab Emirates </option>
                                            <option value="United Kingdom">United Kingdom </option>
                                            <option value="United States">United States </option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands </option>
                                            <option value="Uruguay">Uruguay </option>
                                            <option value="Uzbekistan">Uzbekistan </option>
                                            <option value="value">value </option>
                                            <option value="Vanuatu">Vanuatu </option>
                                            <option value="Venezuela">Venezuela </option>
                                            <option value="Vietnam">Vietnam </option>
                                            <option value="Wallis And Futuna">Wallis And Futuna </option>
                                            <option value="Western Sahara">Western Sahara </option>
                                            <option value="Yemen">Yemen </option>
                                            <option value="Zambia">Zambia </option>
                                            <option value="Zimbabwe">Zimbabwe </option>
                                            <option value="Aland Islands">Aland Islands </option>
                                            <option value="Bosnia Herzegovina">Bosnia Herzegovina </option>
                                            <option value="Saint Barthélemy">Saint Barthélemy </option>
                                            <option value="Brunei">Brunei </option>
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and
                                                Saba </option>
                                            <option value="Congo (Democratic Republic of the)">Congo (Democratic Republic
                                                of the) </option>
                                            <option value="Ivory Coast">Ivory Coast </option>
                                            <option value="Curacao">Curacao </option>
                                            <option value="Falkland Islands">Falkland Islands </option>
                                            <option value="Micronesia">Micronesia </option>
                                            <option value="Guernsey">Guernsey </option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia and
                                                the South Sandwich Islands </option>
                                            <option value="Hong Kong - SAR China">Hong Kong - SAR China </option>
                                            <option value="Isle of Man">Isle of Man </option>
                                            <option value="Jersey">Jersey </option>
                                            <option value="St Kitts and Nevis">St Kitts and Nevis </option>
                                            <option value="Korea North">Korea North </option>
                                            <option value="Korea South">Korea South </option>
                                            <option value="Laos">Laos </option>
                                            <option value="St Lucia">St Lucia </option>
                                            <option value="Montenegro">Montenegro </option>
                                            <option value="Saint Martin (French part)">Saint Martin (French part) </option>
                                            <option value="Macedonia">Macedonia </option>
                                            <option value="Burma (Myanmar)">Burma (Myanmar) </option>
                                            <option value="Macao - SAR China">Macao - SAR China </option>
                                            <option value="Palestinian Authority">Palestinian Authority </option>
                                            <option value="Serbia">Serbia </option>
                                            <option value="Saudi Arabia, Kingdom of">Saudi Arabia, Kingdom of </option>
                                            <option value="St Helena">St Helena </option>
                                            <option value="South Sudan">South Sudan </option>
                                            <option value="Sao Tomé e Principe">Sao Tomé e Principe </option>
                                            <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part) </option>
                                            <option value="Syria">Syria </option>
                                            <option value="East Timor">East Timor </option>
                                            <option value="Vatican City">Vatican City </option>
                                            <option value="St Vincent">St Vincent </option>
                                            <option value="Virgin Islands (British)">Virgin Islands (British) </option>
                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.) </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" placeholder="School Name *"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Contact Email *">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Phone Number *</label>
                                        <select class="form-control">
                                            <option value="Afghanistan">Afghanistan </option>
                                            <option value="Albania">Albania </option>
                                            <option value="Algeria">Algeria </option>
                                            <option value="American Samoa">American Samoa </option>
                                            <option value="Andorra">Andorra </option>
                                            <option value="Angola">Angola </option>
                                            <option value="Anguilla">Anguilla </option>
                                            <option value="Antarctica">Antarctica </option>
                                            <option value="Antigua And Barbuda">Antigua And Barbuda </option>
                                            <option value="Argentina">Argentina </option>
                                            <option value="Armenia">Armenia </option>
                                            <option value="Aruba">Aruba </option>
                                            <option value="Australia">Australia </option>
                                            <option value="Austria">Austria </option>
                                            <option value="Azerbaijan">Azerbaijan </option>
                                            <option value="Bahamas">Bahamas </option>
                                            <option value="Bahrain">Bahrain </option>
                                            <option value="Bangladesh">Bangladesh </option>
                                            <option value="Barbados">Barbados </option>
                                            <option value="Belarus">Belarus </option>
                                            <option value="Belgium">Belgium </option>
                                            <option value="Belize">Belize </option>
                                            <option value="Benin">Benin </option>
                                            <option value="Bermuda">Bermuda </option>
                                            <option value="Bhutan">Bhutan </option>
                                            <option value="Bolivia">Bolivia </option>
                                            <option value="Bosnia And Herzegovina">Bosnia And Herzegovina </option>
                                            <option value="Botswana">Botswana </option>
                                            <option value="Bouvet Island">Bouvet Island </option>
                                            <option value="Brazil">Brazil </option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                            </option>
                                            <option value="British Virgin Islands">British Virgin Islands </option>
                                            <option value="Brunei Darussalam">Brunei Darussalam </option>
                                            <option value="Bulgaria">Bulgaria </option>
                                            <option value="Burkina Faso">Burkina Faso </option>
                                            <option value="Burundi">Burundi </option>
                                            <option value="Cambodia">Cambodia </option>
                                            <option value="Cameroon">Cameroon </option>
                                            <option value="Canada">Canada </option>
                                            <option value="Cape Verde">Cape Verde </option>
                                            <option value="Cayman Islands">Cayman Islands </option>
                                            <option value="Central African Republic">Central African Republic </option>
                                            <option value="Chad">Chad </option>
                                            <option value="Chile">Chile </option>
                                            <option value="China">China </option>
                                            <option value="Christmas Island">Christmas Island </option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands </option>
                                            <option value="Colombia">Colombia </option>
                                            <option value="Comoros">Comoros </option>
                                            <option value="Congo">Congo </option>
                                            <option value="Cook Islands">Cook Islands </option>
                                            <option value="Costa Rica">Costa Rica </option>
                                            <option value="Côte D'Ivoire">Côte D'Ivoire </option>
                                            <option value="Croatia">Croatia </option>
                                            <option value="Cuba">Cuba </option>
                                            <option value="Cyprus">Cyprus </option>
                                            <option value="Czech Republic">Czech Republic </option>
                                            <option value="Democratic Republic of Congo">Democratic Republic of Congo
                                            </option>
                                            <option value="Denmark">Denmark </option>
                                            <option value="description">description </option>
                                            <option value="displayOrder">displayOrder </option>
                                            <option value="Djibouti">Djibouti </option>
                                            <option value="Dominica">Dominica </option>
                                            <option value="Dominican Republic">Dominican Republic </option>
                                            <option value="doubleData">doubleData </option>
                                            <option value="Ecuador">Ecuador </option>
                                            <option value="Egypt">Egypt </option>
                                            <option value="El Salvador">El Salvador </option>
                                            <option value="Equatorial Guinea">Equatorial Guinea </option>
                                            <option value="Eritrea">Eritrea </option>
                                            <option value="Estonia">Estonia </option>
                                            <option value="Ethiopia">Ethiopia </option>
                                            <option value="Europe">Europe </option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">Faroe Islands </option>
                                            <option value="Fiji">Fiji </option>
                                            <option value="Finland">Finland </option>
                                            <option value="France">France </option>
                                            <option value="French Guiana">French Guiana </option>
                                            <option value="French Polynesia">French Polynesia </option>
                                            <option value="French Southern Territories">French Southern Territories
                                            </option>
                                            <option value="Gabon">Gabon </option>
                                            <option value="Gambia">Gambia </option>
                                            <option value="Georgia">Georgia </option>
                                            <option value="Germany">Germany </option>
                                            <option value="Ghana">Ghana </option>
                                            <option value="Gibraltar">Gibraltar </option>
                                            <option value="Greece">Greece </option>
                                            <option value="Greenland">Greenland </option>
                                            <option value="Grenada">Grenada </option>
                                            <option value="Guadeloupe">Guadeloupe </option>
                                            <option value="Guam">Guam </option>
                                            <option value="Guatemala">Guatemala </option>
                                            <option value="Guinea">Guinea </option>
                                            <option value="Guinea-Bissau">Guinea-Bissau </option>
                                            <option value="Guyana">Guyana </option>
                                            <option value="Haiti">Haiti </option>
                                            <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald
                                                Islands </option>
                                            <option value="hidden">hidden </option>
                                            <option value="Honduras">Honduras </option>
                                            <option value="Hong Kong">Hong Kong </option>
                                            <option value="Hungary">Hungary </option>
                                            <option value="Iceland">Iceland </option>
                                            <option value="India">India </option>
                                            <option value="Indonesia">Indonesia </option>
                                            <option value="Iran">Iran </option>
                                            <option value="Iraq">Iraq </option>
                                            <option value="Ireland">Ireland </option>
                                            <option value="Israel">Israel </option>
                                            <option value="Italy">Italy </option>
                                            <option value="Jamaica">Jamaica </option>
                                            <option value="Japan">Japan </option>
                                            <option value="Jordan">Jordan </option>
                                            <option value="Kazakhstan">Kazakhstan </option>
                                            <option value="Kenya">Kenya </option>
                                            <option value="Kiribati">Kiribati </option>
                                            <option value="Kosovo">Kosovo </option>
                                            <option value="Kuwait">Kuwait </option>
                                            <option value="Kyrgyzstan">Kyrgyzstan </option>
                                            <option value="label">label </option>
                                            <option value="Lao People'S Democratic Republic">Lao People'S Democratic
                                                Republic </option>
                                            <option value="Latvia">Latvia </option>
                                            <option value="Lebanon">Lebanon </option>
                                            <option value="Lesotho">Lesotho </option>
                                            <option value="Liberia">Liberia </option>
                                            <option value="Libya">Libya </option>
                                            <option value="Liechtenstein">Liechtenstein </option>
                                            <option value="Lithuania">Lithuania </option>
                                            <option value="Luxembourg">Luxembourg </option>
                                            <option value="Macao">Macao </option>
                                            <option value="Macedonia, The Former Yugoslav Republic Of">Macedonia, The
                                                Former Yugoslav Republic Of </option>
                                            <option value="Madagascar">Madagascar </option>
                                            <option value="Malawi">Malawi </option>
                                            <option value="Malaysia">Malaysia </option>
                                            <option value="Maldives">Maldives </option>
                                            <option value="Mali">Mali </option>
                                            <option value="Malta">Malta </option>
                                            <option value="Marshall Islands">Marshall Islands </option>
                                            <option value="Martinique">Martinique </option>
                                            <option value="Mauritania">Mauritania </option>
                                            <option value="Mauritius">Mauritius </option>
                                            <option value="Mayotte">Mayotte </option>
                                            <option value="Mexico">Mexico </option>
                                            <option value="Micronesia, Federated States Of">Micronesia, Federated States Of
                                            </option>
                                            <option value="Moldova">Moldova </option>
                                            <option value="Monaco">Monaco </option>
                                            <option value="Mongolia">Mongolia </option>
                                            <option value="Montserrat">Montserrat </option>
                                            <option value="Morocco">Morocco </option>
                                            <option value="Mozambique">Mozambique </option>
                                            <option value="Myanmar">Myanmar </option>
                                            <option value="Namibia">Namibia </option>
                                            <option value="Nauru">Nauru </option>
                                            <option value="Nepal">Nepal </option>
                                            <option value="Netherlands">Netherlands </option>
                                            <option value="Netherlands Antilles">Netherlands Antilles </option>
                                            <option value="New Caledonia">New Caledonia </option>
                                            <option value="New Zealand">New Zealand </option>
                                            <option value="Nicaragua">Nicaragua </option>
                                            <option value="Niger">Niger </option>
                                            <option value="Nigeria">Nigeria </option>
                                            <option value="Niue">Niue </option>
                                            <option value="Norfolk Island">Norfolk Island </option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands </option>
                                            <option value="North Korea">North Korea </option>
                                            <option value="Norway">Norway </option>
                                            <option value="Not Applicable">Not Applicable </option>
                                            <option value="Oman">Oman </option>
                                            <option value="Other">Other </option>
                                            <option value="Pakistan">Pakistan </option>
                                            <option value="Palau">Palau </option>
                                            <option value="Palestine">Palestine </option>
                                            <option value="Panama">Panama </option>
                                            <option value="Papua New Guinea">Papua New Guinea </option>
                                            <option value="Paraguay">Paraguay </option>
                                            <option value="Peru">Peru </option>
                                            <option value="Philippines">Philippines </option>
                                            <option value="Pitcairn">Pitcairn </option>
                                            <option value="Poland">Poland </option>
                                            <option value="Portugal">Portugal </option>
                                            <option value="Puerto Rico">Puerto Rico </option>
                                            <option value="Qatar">Qatar </option>
                                            <option value="readOnly">readOnly </option>
                                            <option value="Réunion">Réunion </option>
                                            <option value="Romania">Romania </option>
                                            <option value="Russia">Russia </option>
                                            <option value="Rwanda">Rwanda </option>
                                            <option value="Saint Helena">Saint Helena </option>
                                            <option value="Saint Kitts And Nevis">Saint Kitts And Nevis </option>
                                            <option value="Saint Lucia">Saint Lucia </option>
                                            <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon </option>
                                            <option value="Saint Vincent And The Grenadines">Saint Vincent And The
                                                Grenadines </option>
                                            <option value="Samoa">Samoa </option>
                                            <option value="San Marino">San Marino </option>
                                            <option value="Sao Tome And Principe">Sao Tome And Principe </option>
                                            <option value="Saudi Arabia">Saudi Arabia </option>
                                            <option value="Senegal">Senegal </option>
                                            <option value="Serbia And Montenegro">Serbia And Montenegro </option>
                                            <option value="Seychelles">Seychelles </option>
                                            <option value="Sierra Leone">Sierra Leone </option>
                                            <option value="Singapore">Singapore </option>
                                            <option value="Slovakia">Slovakia </option>
                                            <option value="Slovenia">Slovenia </option>
                                            <option value="Solomon Islands">Solomon Islands </option>
                                            <option value="Somalia">Somalia </option>
                                            <option value="South Africa">South Africa </option>
                                            <option value="South Georgia And South Sandwich Islands">South Georgia And
                                                South Sandwich Islands </option>
                                            <option value="South Korea">South Korea </option>
                                            <option value="Spain">Spain </option>
                                            <option value="Sri Lanka">Sri Lanka </option>
                                            <option value="Sudan">Sudan </option>
                                            <option value="Suriname">Suriname </option>
                                            <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen </option>
                                            <option value="Swaziland">Swaziland </option>
                                            <option value="Sweden">Sweden </option>
                                            <option value="Switzerland">Switzerland </option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic </option>
                                            <option value="Taiwan">Taiwan </option>
                                            <option value="Tajikistan">Tajikistan </option>
                                            <option value="Tanzania">Tanzania </option>
                                            <option value="Thailand">Thailand </option>
                                            <option value="Timor-Leste">Timor-Leste </option>
                                            <option value="Togo">Togo </option>
                                            <option value="Tokelau">Tokelau </option>
                                            <option value="Tonga">Tonga </option>
                                            <option value="Trinidad And Tobago">Trinidad And Tobago </option>
                                            <option value="Tunisia">Tunisia </option>
                                            <option value="Turkey">Turkey </option>
                                            <option value="Turkmenistan">Turkmenistan </option>
                                            <option value="Turks And Caicos Islands">Turks And Caicos Islands </option>
                                            <option value="Tuvalu">Tuvalu </option>
                                            <option value="U.S. Virgin Islands">U.S. Virgin Islands </option>
                                            <option value="Uganda">Uganda </option>
                                            <option value="Ukraine">Ukraine </option>
                                            <option value="United Arab Emirates">United Arab Emirates </option>
                                            <option value="United Kingdom">United Kingdom </option>
                                            <option value="United States">United States </option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands </option>
                                            <option value="Uruguay">Uruguay </option>
                                            <option value="Uzbekistan">Uzbekistan </option>
                                            <option value="value">value </option>
                                            <option value="Vanuatu">Vanuatu </option>
                                            <option value="Venezuela">Venezuela </option>
                                            <option value="Vietnam">Vietnam </option>
                                            <option value="Wallis And Futuna">Wallis And Futuna </option>
                                            <option value="Western Sahara">Western Sahara </option>
                                            <option value="Yemen">Yemen </option>
                                            <option value="Zambia">Zambia </option>
                                            <option value="Zimbabwe">Zimbabwe </option>
                                            <option value="Aland Islands">Aland Islands </option>
                                            <option value="Bosnia Herzegovina">Bosnia Herzegovina </option>
                                            <option value="Saint Barthélemy">Saint Barthélemy </option>
                                            <option value="Brunei">Brunei </option>
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and
                                                Saba </option>
                                            <option value="Congo (Democratic Republic of the)">Congo (Democratic Republic
                                                of the) </option>
                                            <option value="Ivory Coast">Ivory Coast </option>
                                            <option value="Curacao">Curacao </option>
                                            <option value="Falkland Islands">Falkland Islands </option>
                                            <option value="Micronesia">Micronesia </option>
                                            <option value="Guernsey">Guernsey </option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia and
                                                the South Sandwich Islands </option>
                                            <option value="Hong Kong - SAR China">Hong Kong - SAR China </option>
                                            <option value="Isle of Man">Isle of Man </option>
                                            <option value="Jersey">Jersey </option>
                                            <option value="St Kitts and Nevis">St Kitts and Nevis </option>
                                            <option value="Korea North">Korea North </option>
                                            <option value="Korea South">Korea South </option>
                                            <option value="Laos">Laos </option>
                                            <option value="St Lucia">St Lucia </option>
                                            <option value="Montenegro">Montenegro </option>
                                            <option value="Saint Martin (French part)">Saint Martin (French part)
                                            </option>
                                            <option value="Macedonia">Macedonia </option>
                                            <option value="Burma (Myanmar)">Burma (Myanmar) </option>
                                            <option value="Macao - SAR China">Macao - SAR China </option>
                                            <option value="Palestinian Authority">Palestinian Authority </option>
                                            <option value="Serbia">Serbia </option>
                                            <option value="Saudi Arabia, Kingdom of">Saudi Arabia, Kingdom of </option>
                                            <option value="St Helena">St Helena </option>
                                            <option value="South Sudan">South Sudan </option>
                                            <option value="Sao Tomé e Principe">Sao Tomé e Principe </option>
                                            <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part) </option>
                                            <option value="Syria">Syria </option>
                                            <option value="East Timor">East Timor </option>
                                            <option value="Vatican City">Vatican City </option>
                                            <option value="St Vincent">St Vincent </option>
                                            <option value="Virgin Islands (British)">Virgin Islands (British) </option>
                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.) </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="form-group sub-access-guide-form-num">
                                        <input type="text" class="form-control" placeholder="+91">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Contact Title *">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check if you have been
                                                referred by someone in ApplyBoard</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Referred by Full Name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Referred by email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Referred by email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" placeholder="Any additional comments:"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="sub-form-text">
                                        <p>UNIWOLC is committed to protecting and respecting your privacy, and we’ll only
                                            use your personal information to administer your account and to provide the
                                            products and services you requested from us. From time to time, we would like to
                                            contact you about our products and services, as well as other content that may
                                            be of interest to you. If you consent to us contacting you for this purpose,
                                            please tick below to say how you would like us to contact you:</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                            <label class="form-check-label" for="exampleCheck2">I agree to receive other
                                                communications from ApplyBoard.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="sub-form-text">
                                        <p>You can unsubscribe from these communications at any time. For more information
                                            on how to unsubscribe, our privacy practices, and how we are committed to
                                            protecting and respecting your privacy, please review our Privacy Policy.</p>
                                        <p>By clicking submit below, you consent to allow ApplyBoard to store and process
                                            the personal information submitted above to provide you the content requested.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="sub-access-guide-form-btn sub-quality-applications-btn">
                                        <button type="submit" class="btn btn-primary">Access The Guide</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Partnership Request End -->
@endsection
