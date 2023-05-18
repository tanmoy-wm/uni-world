@extends('layouts.fe-auth')
@section('content')
    <!-- Courses Details -->
    <section class="sub-new-awolc-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="sub-course-deta">
                        <div class="sub-course-tt-box d-flex flex-wrap">
                            <div class="sub-course-unt">
                                <img src="{{ asset('assets/frontend/assets/images/courses-details/Cambridge-Education.png') }}"
                                    alt="" />
                            </div>
                            <div class="sub-course-details-title">
                                <h6>University of Tasmania (UTAS) - Hobart</h6>
                                <div class="sub-course-country">
                                    <img src="{{ asset('assets/frontend/assets/images/country-flag/australia.svg') }}"
                                        alt="" /> Toronto, Ontario,
                                    CA
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sub-course-deta-title">
                        <h2>University of Tasmania (UTAS) - Hobart</h2>
                    </div>

                    <div class="sub-course-deta-slider">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="{{ asset('assets/frontend/assets/images/courses-details/see-program-details-banner.jpg') }}"
                                        alt="" />
                                </div>
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                        src="{{ asset('assets/frontend/assets/images/courses-details/see-program-details-banner.jpg') }}"
                                        alt="" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="{{ asset('assets/frontend/assets/images/courses-details/see-program-details-banner.jpg') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sub-course-deta-two-tab">

                        <div class="sub-course-board-two-tab d-flex flex-wrap">
                            <div class="sub-course-dtn-two">
                                <a href="javascript:;">Overview</a>
                                <a href="#Similarprograms">Similar Programs</a>
                            </div>
                        </div>

                        <div class="row main-prog-mt">

                            <div class="col-lg-8">
                                <div class="sub-prog-dtl sub-see-program-pt-pb">
                                    <h5>Program Summary</h5>
                                    <p>UTASAccess – Direct Entry provides a pathway to the University of Tasmania and is
                                        designed to help you acquire the necessary English level to succeed in your chosen
                                        degree. You can satisfy the English requirement for University of Tasmania degrees
                                        with this program without the need for further internationally recognised exam
                                        results such as IELTS or TOEFL.</p>
                                    <p>Each UTASAccess level comprises a 5-week module and progress to successive levels is
                                        based on achievement via testing. Students progress until the successful completion
                                        of the relevant UTASAccess Level required for entry into their chosen University of
                                        Tasmania course. While many students progress to their goal smoothly, it’s important
                                        to note you may need to repeat one or more levels. Allowing time for an additional 5
                                        week module before commencement of your intended degree course is recommended.</p>
                                    <p>While English language requirements differ, as a very general rule Level 6 is
                                        required for undergraduate and Level 7 for postgraduate courses. It’s very important
                                        to check the English requirements for your intended tertiary studies. It is the
                                        responsibility of individual students to ensure awareness of the admission
                                        requirements for entry into intended courses of study.</p>
                                </div>


                                <div id="Similarprograms">
                                    <div
                                        class="sub-similar-pr-title d-flex flex-wrap align-items-center sub-course-details-pb">
                                        <div class="col-lg-12 d-flex flex-wrap align-items-center">
                                            <h3>Similar Programs</h3>
                                            <span>5</span>
                                        </div>
                                    </div>

                                    <div class="collapse" id="collapseExample">
                                        <div class="sub-course-filters-form">
                                            <form class="d-flex flex-wrap align-items-center justify-content-center">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option value="" selected="selected">Program Level
                                                            </option>
                                                            <option value="">None</option>
                                                            <option value="">Non-Credential</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option value="" selected="selected">Discipline</option>
                                                            <option value="">None</option>
                                                            <option value="">Business, Management & Economics</option>
                                                            <option value="">Management, Administration, General
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option value="" selected="selected">Intake</option>
                                                            <option value="">None</option>
                                                            <option value="">Nov 2023</option>
                                                            <option value="">Nov 2024</option>
                                                            <option value="">Jan 2025</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Search Programs">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="course-tab-content">
                                        <div class="d-flex flex-wrap justify-content-between">
                                            <div class="col-lg-8 p-0">
                                                <div class="sub-course-tt-box">
                                                    <div class="sub-course-unt-title">
                                                        <h6>1-Year Post-Secondary Certificate</h6>
                                                        <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                                        <p>Cheshire College South and West - Ellesmere Port</p>
                                                    </div>
                                                    <div class="sub-course-country">
                                                        <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port,
                                                        North West, United Kingdom
                                                    </div>
                                                    <div class="sub-course-appl-bg">
                                                        <div
                                                            class="d-flex flex-wrap align-items-center justify-content-between">
                                                            <div class="sub-tution-text">
                                                                <h6>Tuition Fee</h6>
                                                                <p>£14,250.00 GBP</p>
                                                            </div>
                                                            <div class="sub-tution-text">
                                                                <h6>Application Fee</h6>
                                                                <p>£0.00 GBP</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 p-0">
                                                <div class="sub-course-btn-left">
                                                    <a class="sub-start-btn-applica" href="javascript:;">Check Eligibility
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-tab-content">
                                        <div class="d-flex flex-wrap justify-content-between">
                                            <div class="col-lg-8 p-0">
                                                <div class="sub-course-tt-box">
                                                    <div class="sub-course-unt-title">
                                                        <h6>1-Year Post-Secondary Certificate</h6>
                                                        <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                                        <p>Cheshire College South and West - Ellesmere Port</p>
                                                    </div>
                                                    <div class="sub-course-country">
                                                        <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port,
                                                        North West, United Kingdom
                                                    </div>
                                                    <div class="sub-course-appl-bg">
                                                        <div
                                                            class="d-flex flex-wrap align-items-center justify-content-between">
                                                            <div class="sub-tution-text">
                                                                <h6>Tuition Fee</h6>
                                                                <p>£14,250.00 GBP</p>
                                                            </div>
                                                            <div class="sub-tution-text">
                                                                <h6>Application Fee</h6>
                                                                <p>£0.00 GBP</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-tab-content">
                                        <div class="d-flex flex-wrap justify-content-between">
                                            <div class="col-lg-8 p-0">
                                                <div class="sub-course-tt-box">
                                                    <div class="sub-course-unt-title">
                                                        <h6>1-Year Post-Secondary Certificate</h6>
                                                        <h3>T-Level - Design, Surveying and Planning for Construction</h3>
                                                        <p>Cheshire College South and West - Ellesmere Port</p>
                                                    </div>
                                                    <div class="sub-course-country">
                                                        <i class="fa-sharp fa-solid fa-location-dot"></i> Ellesmere Port,
                                                        North West, United Kingdom
                                                    </div>
                                                    <div class="sub-course-appl-bg">
                                                        <div
                                                            class="d-flex flex-wrap align-items-center justify-content-between">
                                                            <div class="sub-tution-text">
                                                                <h6>Tuition Fee</h6>
                                                                <p>£14,250.00 GBP</p>
                                                            </div>
                                                            <div class="sub-tution-text">
                                                                <h6>Application Fee</h6>
                                                                <p>£0.00 GBP</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 p-0">
                                                <div class="sub-course-btn-left">
                                                    <a class="sub-start-btn-applica" href="javascript:;">Check Eligibility
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="sub-prog-years-bg">

                                    <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                                        <div class="sub-course-unt">
                                            <img src="{{ asset('assets/frontend/assets/images/courses-details/certificate-file.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="sub-course-unt-title">
                                            <h6>1-Year Post-Secondary Certificate</h6>
                                            <div class="sub-course-country">
                                                Program Level
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                                        <div class="sub-course-unt">
                                            <img src="{{ asset('assets/frontend/assets/images/courses-details/calender.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="sub-course-unt-title">
                                            <h6>2 year T-Level program including a work placement</h6>
                                            <div class="sub-course-country">
                                                Program Length
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                                        <div class="sub-course-unt">
                                            <img src="{{ asset('assets/frontend/assets/images/courses-details/money.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="sub-course-unt-title">
                                            <h6>£9,207.00 GBP / Year</h6>
                                            <div class="sub-course-country">
                                                Cost of Living
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                                        <div class="sub-course-unt">
                                            <img src="{{ asset('assets/frontend/assets/images/courses-details/money-tuition.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="sub-course-unt-title">
                                            <h6>£14,250.00 GBP / Year</h6>
                                            <div class="sub-course-country">
                                                Tuition
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-course-tt-box d-flex align-items-start justify-content-start">
                                        <div class="sub-course-unt">
                                            <img src="{{ asset('assets/frontend/assets/images/courses-details/application-fee.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="sub-course-unt-title">
                                            <h6>£0.00 GBP</h6>
                                            <div class="sub-course-country">
                                                Application Fee
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="sub-prog-intake-bg">
                                    <h5>Institution Details</h5>

                                    <div
                                        class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <p>Founded</p>
                                        </div>
                                        <div>
                                            <span>1827</span>
                                        </div>
                                    </div>
                                    <div
                                        class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <p>School ID</p>
                                        </div>
                                        <div>
                                            <span>2159</span>
                                        </div>
                                    </div>
                                    <div
                                        class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <p>DLI number</p>
                                        </div>
                                        <div>
                                            <span>O19332746152</span>
                                        </div>
                                    </div>
                                    <div
                                        class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <p>Institution type</p>
                                        </div>
                                        <div>
                                            <span>Public</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="sub-prog-intake-bg">
                                    <h5>Institution Details</h5>

                                    <div
                                        class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <p>January - April</p>
                                        </div>
                                        <div>
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                    <div
                                        class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <p>May - August</p>
                                        </div>
                                        <div>
                                            <span>Under 15 days</span>
                                        </div>
                                    </div>
                                    <div
                                        class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <p>September - December</p>
                                        </div>
                                        <div>
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="sub-prog-intake-bg">
                                    <h5>Program Intakes</h5>

                                    <div
                                        class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="sub-intake-open-btn">
                                            <span>Open</span>
                                        </div>
                                        <div class="sub-intake-date d-flex flex-wrap">
                                            <a data-toggle="collapse" href="#multiCollapseExample1" role="button"
                                                aria-expanded="false" aria-controls="multiCollapseExample1">
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <p>Sep 2022</p>
                                        </div>
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="sub-opne-date-text">
                                                <div>
                                                    <p>Open date <a href="javascript:;" data-toggle="modal"
                                                            data-target="#exampleModal"><i
                                                                class="fa-solid fa-circle-info"></i></a></p>
                                                    <span>2021-12-17 12:00 AM GMT</span>
                                                </div>
                                                <div>
                                                    <p>Submission deadline</p>
                                                    <span>No data available</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="sub-intake-open-btn sub-intake-open-btn-blue">
                                            <span>Likely open</span>
                                        </div>
                                        <div class="sub-intake-date d-flex flex-wrap">
                                            <a data-toggle="collapse" href="#multiCollapseExample2" role="button"
                                                aria-expanded="false" aria-controls="multiCollapseExample2">
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <p>Sep 2022</p>
                                        </div>
                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <div class="sub-opne-date-text">
                                                <div>
                                                    <p>Open date <a href="javascript:;" data-toggle="modal"
                                                            data-target="#exampleModal"><i
                                                                class="fa-solid fa-circle-info"></i></a></p>
                                                    <span>2021-12-17 12:00 AM GMT</span>
                                                </div>
                                                <div>
                                                    <p>Submission deadline</p>
                                                    <span>No data available</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="sub-intake-open-btn sub-intake-open-btn-blue">
                                            <span>Likely open</span>
                                        </div>
                                        <div class="sub-intake-date d-flex flex-wrap">
                                            <a data-toggle="collapse" href="#multiCollapseExample3" role="button"
                                                aria-expanded="false" aria-controls="multiCollapseExample3">
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <p>Sep 2022</p>
                                        </div>
                                        <div class="collapse multi-collapse" id="multiCollapseExample3">
                                            <div class="sub-opne-date-text">
                                                <div>
                                                    <p>Open date <a href="javascript:;" data-toggle="modal"
                                                            data-target="#exampleModal"><i
                                                                class="fa-solid fa-circle-info"></i></a></p>
                                                    <span>2021-12-17 12:00 AM GMT</span>
                                                </div>
                                                <div>
                                                    <p>Submission deadline</p>
                                                    <span>No data available</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="sub-intake-open-main d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="sub-intake-open-btn">
                                            <span>Open</span>
                                        </div>
                                        <div class="sub-intake-date d-flex flex-wrap">
                                            <a data-toggle="collapse" href="#multiCollapseExample4" role="button"
                                                aria-expanded="false" aria-controls="multiCollapseExample4">
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <p>Sep 2022</p>
                                        </div>
                                        <div class="collapse multi-collapse" id="multiCollapseExample4">
                                            <div class="sub-opne-date-text">
                                                <div>
                                                    <p>Open date <a href="javascript:;" data-toggle="modal"
                                                            data-target="#exampleModal"><i
                                                                class="fa-solid fa-circle-info"></i></a></p>
                                                    <span>2021-12-17 12:00 AM GMT</span>
                                                </div>
                                                <div>
                                                    <p>Submission deadline</p>
                                                    <span>No data available</span>
                                                </div>
                                            </div>
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
    <!-- Courses Details End -->
@show
