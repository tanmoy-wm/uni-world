@extends('layouts.fe-auth')
@section('content')
    <div class="dashboardDtlsAreainner">
        <div class="dashboard_card analytics_card dashBeforeApplySec">
            <div class="pb-4 d-flex align-items-center headingSec dashboardHeadingSec">
                <div class="icon mr-3">
                    <img src="{{ asset('assets/frontend/assets/auth/assets/images/map.png') }}" class="img-fluid"
                        alt="">
                </div>
                <div class="content">
                    <h3 class="title mb-0">My Progress</h3>
                </div>

            </div>
            <div class="dashBeforeApplyArea mb-1">
                <div class="dashBeforeApplyHeaderArea mb-4">
                    <h5 class="mb-3">Before Applying</h5>
                    <h6 class="mb-0">How it works <a href="#"><i class="fa-regular fa-video"></i></a></h6>
                </div>
                <div class="dashBeforeApplyAreainner">
                    <ul class="row rowBox">

                        <li class="col-lg-4 col-md-4 col-sm-6 col-12 columnBox dashBeforeApplyBox complete">
                            <a href="#" class="dashBeforeApplyLink" data-toggle="modal" id="checkEligibility"
                                data-target="#applyBoardModal">
                                <span class="icon"><i class="fa-regular fa-arrow-right"></i> </span>
                                <span class="text">Check Eligiblity</span>
                            </a>
                        </li>

                        <li class="col-lg-4 col-md-4 col-sm-6 col-12 columnBox dashBeforeApplyBox complete">
                            <a href="{{ route('frontend.programs') }}" class="dashBeforeApplyLink">
                                <span class="icon"><i class="fa-regular fa-arrow-right"></i></span>
                                <span class="text">Choose a Program</span>
                            </a>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-12 columnBox dashBeforeApplyBox">
                            <a href="{{ route('auth.edit-profile') }}" class="dashBeforeApplyLink ">
                                <span class="icon"><i class="fa-regular fa-arrow-right"></i></span>
                                <span class="text">Complete Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- The Modal -->
            <div class="modal applyBoardModal" id="applyBoardModal">
                <div class="modal-dialog applyBoardModalDiolog">
                    <div class="modal-content applyBoardModalContent applyBoardSec"
                        style="background-image: url('{{ url('/assets/frontend/assets/auth/assets/images/bg3.jpg') }}');">
                        <div class="dashboard_card applyBoardCard custom__bg">
                            <div class="dashboard_card_body applyBoardCardBody">
                                <form id="preferences-form" action="" nethod="POST">
                                    <div class="applyStepArea">
                                        <div class="applyStepSec" id="step-1">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck"></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>

                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Preferences</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:0%"></div>
                                                </div>
                                            </div>

                                            <div class="applyStepSecinner">
                                                <div class="form-group">
                                                    <h4 class="mb-4">Which countries do you want to study in?</h4>
                                                    <div class="mdCheckboxArea mb-4">
                                                        <div class="mdCheckbox mb-3">
                                                            <input id="i1" type="checkbox" value="usa"
                                                                name="">
                                                            <label for="i1">USA</label>
                                                        </div>
                                                        <div class="mdCheckbox mb-3">
                                                            <input id="i2" type="checkbox" value="canada">
                                                            <label for="i2">Canada</label>
                                                        </div>
                                                        <div class="mdCheckbox mb-3">
                                                            <input id="i3" value="united-kingdom" type="checkbox"
                                                                name="">
                                                            <label for="i3">United Kingdom</label>
                                                        </div>
                                                        <div class="mdCheckbox mb-3">
                                                            <input id="i4" type="checkbox" value="australia"
                                                                name="">
                                                            <label for="i4">Australia</label>
                                                        </div>
                                                        <div class="mdCheckbox">
                                                            <input id="i5" type="checkbox" value="ireland"
                                                                name="">
                                                            <label for="i5">Ireland</label>
                                                        </div>

                                                    </div>
                                                    <div class="applyStepBtnArea">
                                                        <button id="step-1-next" class="applyStepBtn">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display: none;" id="step-2">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-2-back"><i class="fa-regular fa-arrow-left"></i></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>

                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Preferences</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:10%"></div>
                                                </div>
                                            </div>

                                            <div class="applyStepSecinner">
                                                <div class="form-group">
                                                    <h4 class="mb-4">Which levels of education are you applying for?
                                                    </h4>
                                                    <div class="mdCheckboxArea mb-4">
                                                        <div class="mdCheckbox mb-3">
                                                            <input id="i6" type="checkbox">
                                                            <label for="i6">Primary / Elementary School</label>
                                                        </div>
                                                        <div class="mdCheckbox mb-3">
                                                            <input id="i7" type="checkbox">
                                                            <label for="i7">Secondary School</label>
                                                        </div>
                                                        <div class="mdCheckbox mb-3">
                                                            <input id="i8" type="checkbox">
                                                            <label for="i8">Bachelor's Degree / College Diploma /
                                                                Undergraduate</label>
                                                        </div>
                                                        <div class="mdCheckbox mb-3">
                                                            <input id="i9" type="checkbox">
                                                            <label for="i9">Master's Degree /
                                                                Post-graduate</label>
                                                        </div>
                                                        <div class="mdCheckbox">
                                                            <input id="i10" type="checkbox">
                                                            <label for="i10">English as a Second Language
                                                                (ESL)</label>
                                                        </div>

                                                    </div>
                                                    <div class="applyStepBtnArea">
                                                        <button type="botton" id="step-2-next"
                                                            class="applyStepBtn">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display:none;" id="step-3">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-3-back"><i class="fa-regular fa-arrow-left"></i></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>

                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Preferences</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:20%"></div>
                                                </div>
                                            </div>

                                            <div class="applyStepSecinner">
                                                <div class="form-group">
                                                    <h4 class="mb-4">What would you like to study?</h4>
                                                    <div class="appStepAccordianArea">
                                                        <div class="appStepAccordian">
                                                            <div class="appStepAccordianItem active">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center appStepAccordianHeader">
                                                                    <h5 class="title">Engineering and Technology</h5>
                                                                    <span class="arrow"><i
                                                                            class="fa-regular fa-chevron-down"></i></span>
                                                                </div>

                                                                <div class="appStepAccordianBody">
                                                                    <div class="mdCheckboxArea mb-4">
                                                                        <div class="mb-3"><a href="#"
                                                                                class="btn"
                                                                                style="color:#5d4bdc;">Sellect All</a>
                                                                        </div>

                                                                        <div class="row rowBox">
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i11" type="checkbox">
                                                                                    <label for="i11">Aero Space,
                                                                                        Aviation and Pilot
                                                                                        Technology</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i12" type="checkbox">
                                                                                    <label
                                                                                        for="i12">Agriculture</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i13" type="checkbox">
                                                                                    <label
                                                                                        for="i13">Architecture</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i14" type="checkbox">
                                                                                    <label for="i14">Biomedical
                                                                                        Engineering</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i15" type="checkbox">
                                                                                    <label for="i15">Chemical
                                                                                        Engineering</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i16" type="checkbox">
                                                                                    <label for="i16">Civil
                                                                                        Engineering,
                                                                                        Construction</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i17" type="checkbox">
                                                                                    <label for="i17">Electrical
                                                                                        Engineering</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i18" type="checkbox">
                                                                                    <label
                                                                                        for="i18">Electronic</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox">
                                                                                    <input id="i19" type="checkbox">
                                                                                    <label for="i19">Environmental
                                                                                        Engineering</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i20" type="checkbox">
                                                                                    <label for="i20">Game Design,
                                                                                        Game
                                                                                        Animation, Game Creation</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i21" type="checkbox">
                                                                                    <label
                                                                                        for="i21">Industrial</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox">
                                                                                    <input id="i22" type="checkbox">
                                                                                    <label for="i22">Material
                                                                                        Engineering</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i23" type="checkbox">
                                                                                    <label for="i23">Mechanical,
                                                                                        Manufacturing, Robotic
                                                                                        Engineering</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i24" type="checkbox">
                                                                                    <label
                                                                                        for="i24">Radiography</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i25" type="checkbox">
                                                                                    <label for="i25">Technology,
                                                                                        Software, Computer, IT</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="appStepAccordianItem">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center appStepAccordianHeader">
                                                                    <h5 class="title">Sciences</h5>
                                                                    <span class="arrow"><i
                                                                            class="fa-regular fa-chevron-down"></i></span>
                                                                </div>
                                                                <div class="appStepAccordianBody">
                                                                    <div class="mdCheckboxArea mb-4">
                                                                        <div class="mb-3"><a href="#"
                                                                                class="btn"
                                                                                style="color:#5d4bdc;">Sellect All</a>
                                                                        </div>
                                                                        <div class="row rowBox">
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i26" type="checkbox">
                                                                                    <label for="i11">Astronomy</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i27" type="checkbox">
                                                                                    <label
                                                                                        for="i27">Biochemistry</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i28" type="checkbox">
                                                                                    <label for="i28">Biology</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i29" type="checkbox">
                                                                                    <label for="i29">Chemistry</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i30" type="checkbox">
                                                                                    <label for="i30">Computer
                                                                                        Science</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i31" type="checkbox">
                                                                                    <label for="i31">Dental</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i32" type="checkbox">
                                                                                    <label for="i32">Environmental,
                                                                                        Earth Sciences</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i33" type="checkbox">
                                                                                    <label for="i33">Food,
                                                                                        Nutrition,
                                                                                        Exercise</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i34" type="checkbox">
                                                                                    <label for="i34">General</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i35" type="checkbox">
                                                                                    <label for="i35">Geology</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i36" type="checkbox">
                                                                                    <label for="i36">Humanitarian
                                                                                        Sciences</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i37" type="checkbox">
                                                                                    <label
                                                                                        for="i37">Mathematics</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i38" type="checkbox">
                                                                                    <label for="i38">Optometry</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i39" type="checkbox">
                                                                                    <label for="i39">Pharmacy</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i40" type="checkbox">
                                                                                    <label for="i40">Physics</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i41" type="checkbox">
                                                                                    <label for="i41">Political</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i42" type="checkbox">
                                                                                    <label for="i42">Psychology,
                                                                                        Philosophy, Therapy</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i43" type="checkbox">
                                                                                    <label
                                                                                        for="i43">Veterinarian</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="appStepAccordianItem">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center appStepAccordianHeader">
                                                                    <h5 class="title">Arts</h5>
                                                                    <span class="arrow"><i
                                                                            class="fa-regular fa-chevron-down"></i></span>
                                                                </div>
                                                                <div class="appStepAccordianBody">
                                                                    <div class="mdCheckboxArea mb-4">
                                                                        <div class="mb-3"><a href="#"
                                                                                class="btn"
                                                                                style="color:#5d4bdc;">Sellect All</a>
                                                                        </div>
                                                                        <div class="row rowBox">
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i44" type="checkbox">
                                                                                    <label for="i44">Animation</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i45" type="checkbox">
                                                                                    <label
                                                                                        for="i45">Anthropology</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i46" type="checkbox">
                                                                                    <label
                                                                                        for="i46">Communication</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i47" type="checkbox">
                                                                                    <label for="i47">English
                                                                                        Literature</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i48" type="checkbox">
                                                                                    <label for="i48">Fashion,
                                                                                        Esthetics</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i49" type="checkbox">
                                                                                    <label for="i49">Fine
                                                                                        Arts</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i50" type="checkbox">
                                                                                    <label for="i50">Food and
                                                                                        Culinary</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i51" type="checkbox">
                                                                                    <label for="i51">Gender
                                                                                        Studies</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i52" type="checkbox">
                                                                                    <label for="i52">General</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i53" type="checkbox">
                                                                                    <label for="i53">Geology</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i54" type="checkbox">
                                                                                    <label for="i54">Global
                                                                                        Studies</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i55" type="checkbox">
                                                                                    <label for="i55">Graphic
                                                                                        Design,
                                                                                        Interior Design</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i56" type="checkbox">
                                                                                    <label for="i56">History</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i57" type="checkbox">
                                                                                    <label
                                                                                        for="i57">Journalism</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i58" type="checkbox">
                                                                                    <label for="i58">Languages</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i59" type="checkbox">
                                                                                    <label for="i59">Liberal
                                                                                        Arts</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i60" type="checkbox">
                                                                                    <label for="i60">Media,
                                                                                        Photography, Film, Theatre,
                                                                                        Performance</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i61" type="checkbox">
                                                                                    <label for="i61">Music,
                                                                                        Audio</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i62" type="checkbox">
                                                                                    <label for="i62">Planning
                                                                                        (Urban)</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i63" type="checkbox">
                                                                                    <label for="i63">Religion</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i64" type="checkbox">
                                                                                    <label for="i64">Sociology</label>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="appStepAccordianItem">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center appStepAccordianHeader">
                                                                    <h5 class="title">Business, Management and
                                                                        Economics
                                                                    </h5>
                                                                    <span class="arrow"><i
                                                                            class="fa-regular fa-chevron-down"></i></span>
                                                                </div>
                                                                <div class="appStepAccordianBody">
                                                                    <div class="mdCheckboxArea mb-4">
                                                                        <div class="mb-3"><a href="#"
                                                                                class="btn"
                                                                                style="color:#5d4bdc;">Sellect All</a>
                                                                        </div>
                                                                        <div class="row rowBox">
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i65" type="checkbox">
                                                                                    <label
                                                                                        for="i65">Accounting</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i66" type="checkbox">
                                                                                    <label
                                                                                        for="i66">Entrepreneurship</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i67" type="checkbox">
                                                                                    <label for="i67">Finance,
                                                                                        Economics</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i68" type="checkbox">
                                                                                    <label for="i68">Hospitality
                                                                                        and
                                                                                        Tourism, Recreation</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i69" type="checkbox">
                                                                                    <label for="i69">Human
                                                                                        Resources</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i70" type="checkbox">
                                                                                    <label for="i70">International
                                                                                        Business</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i71" type="checkbox">
                                                                                    <label for="i71">Management,
                                                                                        Administration, General</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i72" type="checkbox">
                                                                                    <label for="i72">Marketing,
                                                                                        Analyst, Advertising</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i73" type="checkbox">
                                                                                    <label for="i73">Public
                                                                                        Relation</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i74" type="checkbox">
                                                                                    <label for="i74">Supply
                                                                                        Chain</label>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="appStepAccordianItem">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center appStepAccordianHeader">
                                                                    <h5 class="title">Law, Politics, Social, Community
                                                                        Service and Teaching</h5>
                                                                    <span class="arrow"><i
                                                                            class="fa-regular fa-chevron-down"></i></span>
                                                                </div>
                                                                <div class="appStepAccordianBody">
                                                                    <div class="mdCheckboxArea mb-4">
                                                                        <div class="mb-3"><a href="#"
                                                                                class="btn"
                                                                                style="color:#5d4bdc;">Sellect All</a>
                                                                        </div>
                                                                        <div class="row rowBox">
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i75" type="checkbox">
                                                                                    <label for="i75">Community,
                                                                                        Social
                                                                                        Service</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i76" type="checkbox">
                                                                                    <label for="i76">Law,
                                                                                        Politics,
                                                                                        Police, Security</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i77" type="checkbox">
                                                                                    <label for="i77">Teaching,
                                                                                        Early
                                                                                        Development, Child Care</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="appStepAccordianItem">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center appStepAccordianHeader">
                                                                    <h5 class="title">English for Academic Studies
                                                                    </h5>
                                                                    <span class="arrow"><i
                                                                            class="fa-regular fa-chevron-down"></i></span>
                                                                </div>
                                                                <div class="appStepAccordianBody">
                                                                    <div class="mdCheckboxArea mb-4">
                                                                        <div class="mb-3"><a href="#"
                                                                                class="btn"
                                                                                style="color:#5d4bdc;">Sellect All</a>
                                                                        </div>
                                                                        <div class="row rowBox">

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i78" type="checkbox">
                                                                                    <label for="i78">English for
                                                                                        Academic Studies</label>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="appStepAccordianItem">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center appStepAccordianHeader">
                                                                    <h5 class="title">Health Sciences, Medicine,
                                                                        Nursing,
                                                                        Paramedic and Kinesiology</h5>
                                                                    <span class="arrow"><i
                                                                            class="fa-regular fa-chevron-down"></i></span>
                                                                </div>
                                                                <div class="appStepAccordianBody">
                                                                    <div class="mdCheckboxArea mb-4">
                                                                        <div class="mb-3"><a href="#"
                                                                                class="btn"
                                                                                style="color:#5d4bdc;">Sellect All</a>
                                                                        </div>

                                                                        <div class="row rowBox">
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                            <div class="mdCheckbox mb-3">
                                                                                <input id="i79" type="checkbox">
                                                                                <label for="i79">Health Sciences,
                                                                                    Medicine, Nursing, Paramedic and
                                                                                    Kinesiology</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="applyStepBtnArea">
                                                    <button type="botton" id="step-3-next"
                                                        class="applyStepBtn">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display:none;" id="step-4">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-4-back"><i class="fa-regular fa-arrow-left"></i></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>

                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Preferences</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:30%"></div>
                                                </div>
                                            </div>

                                            <div class="applyStepSecinner">
                                                <div class="form-group">
                                                    <h4 class="mb-4">When do you want to start your studies?</h4>
                                                    <div class="appStepAccordianArea">
                                                        <div class="appStepAccordian">
                                                            <div class="appStepAccordianItem active">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center appStepAccordianHeader">
                                                                    <h5 class="title">2023</h5>
                                                                    <span class="arrow"><i
                                                                            class="fa-regular fa-chevron-down"></i></span>
                                                                </div>
                                                                <div class="appStepAccordianBody">
                                                                    <div class="mdCheckboxArea mb-4">
                                                                        <div class="mb-3"><a href="#"
                                                                                class="btn"
                                                                                style="color:#5d4bdc;">Sellect All</a>
                                                                        </div>
                                                                        <div class="row rowBox">
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i80" type="checkbox">
                                                                                    <label for="i80">June
                                                                                        2023</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i81" type="checkbox">
                                                                                    <label for="i81">July
                                                                                        2023</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i82" type="checkbox">
                                                                                    <label for="i82">August
                                                                                        2023</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i83" type="checkbox">
                                                                                    <label for="i83">September
                                                                                        2023</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i84" type="checkbox">
                                                                                    <label for="i84">October
                                                                                        2023</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i85" type="checkbox">
                                                                                    <label for="i85">November
                                                                                        2023</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i86" type="checkbox">
                                                                                    <label for="i86">December
                                                                                        2023</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="appStepAccordianItem">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center appStepAccordianHeader">
                                                                    <h5 class="title">2024</h5>
                                                                    <span class="arrow"><i
                                                                            class="fa-regular fa-chevron-down"></i></span>
                                                                </div>
                                                                <div class="appStepAccordianBody">
                                                                    <div class="mdCheckboxArea mb-4">
                                                                        <div class="mb-3"><a href="#"
                                                                                class="btn"
                                                                                style="color:#5d4bdc;">Sellect All</a>
                                                                        </div>
                                                                        <div class="row rowBox">

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i87" type="checkbox">
                                                                                    <label for="i87">January
                                                                                        2024</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i88" type="checkbox">
                                                                                    <label for="i88">February
                                                                                        2024</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i89" type="checkbox">
                                                                                    <label for="i89">March
                                                                                        2024</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i90" type="checkbox">
                                                                                    <label for="i90">April
                                                                                        2024</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i91" type="checkbox">
                                                                                    <label for="i91">May
                                                                                        2024</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i92" type="checkbox">
                                                                                    <label for="i92">June
                                                                                        2024</label>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i93" type="checkbox">
                                                                                    <label for="i93">July
                                                                                        2024</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i94" type="checkbox">
                                                                                    <label for="i94">August
                                                                                        2024</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i95" type="checkbox">
                                                                                    <label for="i95">September
                                                                                        2024</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i96" type="checkbox">
                                                                                    <label for="i96">October
                                                                                        2024</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i97" type="checkbox">
                                                                                    <label for="i97">November
                                                                                        2024</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-lg-6 col-md-6 col-sm-6 col-12 columnBox">
                                                                                <div class="mdCheckbox mb-3">
                                                                                    <input id="i98" type="checkbox">
                                                                                    <label for="i98">December
                                                                                        2024</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="applyStepBtnArea">
                                                    <button type="botton" class="applyStepBtn"
                                                        id="step-4-next">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display:none;" id="step-5">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-5-back"><i class="fa-regular fa-arrow-left"></i></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>
                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Preferences</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:40%"></div>
                                                </div>
                                            </div>
                                            <div class="applyStepSecinner">
                                                <div class="form-group">
                                                    <h4 class="mb-4">When do you want to start your studies?</h4>
                                                    <div class="row rowBox">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdradiobox mb-3">
                                                                <input id="ir1" type="radio" name="radio1">
                                                                <label for="ir1">Up to ~$10,000 USD</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdradiobox mb-3">
                                                                <input id="ir2" type="radio" name="radio1">
                                                                <label for="ir2">Up to ~$20,000 USD</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdradiobox mb-3">
                                                                <input id="ir3" type="radio" name="radio1">
                                                                <label for="ir3">Up to ~$30,000 USD</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdradiobox mb-3">
                                                                <input id="ir4" type="radio" name="radio1">
                                                                <label for="ir4">No limit</label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="applyStepBtnArea">
                                                    <button type="botton" id="step-5-next"
                                                        class="applyStepBtn">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display:none;" id="step-6">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-6-back"><i class="fa-regular fa-arrow-left"></i></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>
                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Preferences</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:40%"></div>
                                                </div> -->
                                            </div>

                                            <div class="applyStepSecinner">
                                                <div class="form-group">
                                                    <h4 class="mb-4">You're doing great Sneha!</h4>
                                                    <p>Next, we will ask you 6 - 8 questions to check your eligibility.
                                                    </p>

                                                </div>

                                                <div class="applyStepBtnArea">
                                                    <button type="botton" class="applyStepBtn"
                                                        id="step-6-next">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display:none;" id="step-7">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-7-back"><i class="fa-regular fa-arrow-left"></i></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>
                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Background</h6>

                                                <div class="progress">
                                                    <div class="progress-bar" style="width:50%"></div>
                                                </div>
                                            </div>

                                            <div class="applyStepSecinner">
                                                <div class="form-group">
                                                    <h4 class="mb-4">What is your nationality?</h4>
                                                    <div class="form-group">
                                                        <select class="form-control" name="nationality">
                                                            @forelse ($countries as $country)
                                                                <option value="{{ $country->name }}">{{ $country->name }}
                                                                </option>
                                                            @empty
                                                                <option value="">No country found.</option>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="applyStepBtnArea">
                                                    <button type="botton" class="applyStepBtn"
                                                        id="step-7-next">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display:none;" id="step-8">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-8-back"><i class="fa-regular fa-arrow-left"></i></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>
                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Background</h6>

                                                <div class="progress">
                                                    <div class="progress-bar" style="width:60%"></div>
                                                </div>

                                            </div>

                                            <div class="applyStepSecinner">
                                                <div class="form-group">
                                                    <h4 class="mb-4">What is your country of residence?</h4>
                                                    <div class="form-group">
                                                        <select class="form-control" name="">
                                                            @forelse ($countries as $country)
                                                                <option value="{{ $country->name }}">{{ $country->name }}
                                                                </option>
                                                            @empty
                                                                <option value="">No Country Found.</option>
                                                            @endforelse
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="applyStepBtnArea">
                                                    <button type="botton" class="applyStepBtn"
                                                        id="step-8-next">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display:none;" id="step-9">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-9-back"><i class="fa-regular fa-arrow-left"></i></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>

                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Background</h6>

                                                <div class="progress">
                                                    <div class="progress-bar" style="width:70%"></div>
                                                </div>

                                            </div>

                                            <div class="applyStepSecinner">
                                                <div class="form-group">
                                                    <h4 class="mb-4">What is your state of residence?</h4>
                                                    <div class="form-group">
                                                        <select name="state" id="state" class="form-control">
                                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                            <option value="Andaman and Nicobar Islands">Andaman and
                                                                Nicobar Islands</option>
                                                            <option value="Arunachal Pradesh">Arunachal Pradesh
                                                            </option>
                                                            <option value="Assam">Assam</option>
                                                            <option value="Bihar">Bihar</option>
                                                            <option value="Chandigarh">Chandigarh</option>
                                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar
                                                                Haveli
                                                            </option>
                                                            <option value="Daman and Diu">Daman and Diu</option>
                                                            <option value="Delhi">Delhi</option>
                                                            <option value="Lakshadweep">Lakshadweep</option>
                                                            <option value="Puducherry">Puducherry</option>
                                                            <option value="Goa">Goa</option>
                                                            <option value="Gujarat">Gujarat</option>
                                                            <option value="Haryana">Haryana</option>
                                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                            <option value="Jammu and Kashmir">Jammu and Kashmir
                                                            </option>
                                                            <option value="Jharkhand">Jharkhand</option>
                                                            <option value="Karnataka">Karnataka</option>
                                                            <option value="Kerala">Kerala</option>
                                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                            <option value="Maharashtra">Maharashtra</option>
                                                            <option value="Manipur">Manipur</option>
                                                            <option value="Meghalaya">Meghalaya</option>
                                                            <option value="Mizoram">Mizoram</option>
                                                            <option value="Nagaland">Nagaland</option>
                                                            <option value="Odisha">Odisha</option>
                                                            <option value="Punjab">Punjab</option>
                                                            <option value="Rajasthan">Rajasthan</option>
                                                            <option value="Sikkim">Sikkim</option>
                                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                                            <option value="Telangana">Telangana</option>
                                                            <option value="Tripura">Tripura</option>
                                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                            <option value="Uttarakhand">Uttarakhand</option>
                                                            <option value="West Bengal">West Bengal</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="applyStepBtnArea">
                                                    <button type="botton" id="step-9-next"
                                                        class="applyStepBtn">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display:none;" id="step-10">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-10-back"><i class="fa-regular fa-arrow-left"></i></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>

                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Background</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:70%"></div>
                                                </div>
                                            </div>

                                            <div class="applyStepSecinner">
                                                <div class="form-group">
                                                    <h4 class="mb-4">Which valid study permits or visas do you have?
                                                    </h4>
                                                    <div class="form-group">
                                                        <div class="row rowBox">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                                <div class="mdCheckbox mb-3">
                                                                    <input id="i98" type="checkbox">
                                                                    <label for="i98">December 2024</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                                <div class="mdCheckbox mb-3">
                                                                    <input id="i99" type="checkbox">
                                                                    <label for="i99">Canadian Study Permit or
                                                                        Visitor
                                                                        Visa</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                                <div class="mdCheckbox mb-3">
                                                                    <input id="i100" type="checkbox">
                                                                    <label for="i100">UK Student Visa (Tier 4) or
                                                                        Short Term Study Visa</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                                <div class="mdCheckbox mb-3">
                                                                    <input id="i101" type="checkbox">
                                                                    <label for="i101">Australian Student
                                                                        Visa</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                                <div class="mdCheckbox mb-3">
                                                                    <input id="i102" type="checkbox">
                                                                    <label for="i102">Australian Student
                                                                        Visa</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                                <div class="mdCheckbox mb-3">
                                                                    <input id="i103" type="checkbox">
                                                                    <label for="i103"> don't have this</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="applyStepBtnArea">
                                                    <button type="botton" class="applyStepBtn"
                                                        id="step-10-next">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display:none;" id="step-11">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-11-back"><i class="fa-regular fa-arrow-left"></i></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>

                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Preferences</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:80%"></div>
                                                </div>
                                            </div>

                                            <div class="applyStepSecinner">
                                                <h4 class="mb-4">What is your highest level of education?</h4>
                                                <div class="form-group">
                                                    <label class="mb-2">Status</label>
                                                    <div class="row rowBox">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdradiobox mb-3">
                                                                <input id="ir5" type="radio" name="radio2">
                                                                <label for="ir5">I have graduated</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdradiobox mb-3">
                                                                <input id="ir6" type="radio" name="radio2">
                                                                <label for="ir6">I am still studying</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="mb-2">Country of education</label>
                                                    <select class="form-control" name="">
                                                        @forelse ($countries as $country)
                                                            <option value="{{ $country->name }}">{{ $country->name }}
                                                            </option>
                                                        @empty
                                                            <option value="">No Country Found</option>
                                                        @endforelse
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="mb-2">Education level</label>
                                                    <select class="form-control">
                                                        <option>Primary</option>
                                                        <option>Secondary</option>
                                                        <option>Undergraduate</option>
                                                        <option>Postgraduate</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="mb-2">Degree</label>
                                                    <select class="form-control">
                                                        <option>1-Year Post Secondary Certificate</option>
                                                        <option>2-Year Undergraduate Diploma</option>
                                                        <option>3-Year Undergraduate Advance Diploma</option>
                                                        <option>3-Year Bachelors Degree</option>
                                                        <option>4-Year Bachelors Degree</option>
                                                    </select>
                                                </div>

                                                <div class="applyStepBtnArea">
                                                    <button type="botton" id="step-11-next"
                                                        class="applyStepBtn">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display:none;" id="step-12">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-12-back"><i class="fa-regular fa-arrow-left"></i>
                                                </div>

                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>

                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Background</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:80%"></div>
                                                </div>
                                            </div>

                                            <div class="applyStepSecinner">
                                                <h4 class="mb-4">What is your most recent overall grade?</h4>
                                                <div class="form-group">
                                                    <label class="mb-2">Grading Scheme</label>
                                                    <select class="form-control">
                                                        <option>Post Secondary (Diploma) Grade Point 10 Scale</option>
                                                        <option>Post Secondary (Diploma) Percentage Scale 0-100</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="mb-2">Grading Avarage</label>
                                                    <input type="number" class="form-control" value="0">
                                                    <small>This grade will be converted to the school’s grading
                                                        system.</small>
                                                </div>

                                                <div class="applyStepBtnArea">
                                                    <button type="botton" id=step-12-next
                                                        class="applyStepBtn">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display:none;" id="step-13">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-13-back"><i class="fa-regular fa-arrow-left"></i></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>

                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Background</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:80%"></div>
                                                </div>
                                            </div>

                                            <div class="applyStepSecinner">
                                                <h4 class="mb-4">Have you taken any English proficiency tests?</h4>
                                                <div class="form-group">
                                                    <label class="mb-2">Status</label>
                                                    <div class="row rowBox">

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdradiobox mb-3">
                                                                <input id="ir7" type="radio" name="radio3">
                                                                <label for="ir7">IELTS</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdradiobox mb-3">
                                                                <input id="ir8" type="radio" name="radio3">
                                                                <label for="ir8">TOEFL</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdradiobox mb-3">
                                                                <input id="ir9" type="radio" name="radio3">
                                                                <label for="ir9">PTE</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdradiobox mb-3">
                                                                <input id="ir10" type="radio" name="radio3">
                                                                <label for="ir10">Duolingo</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdradiobox mb-3">
                                                                <input id="ir11" type="radio" name="radio3">
                                                                <label for="ir11">I don't have this</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdradiobox mb-3">
                                                                <input id="ir12" type="radio" name="radio3">
                                                                <label for="ir12">Not yet, but I will in the
                                                                    future</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <small>If you haven't taken a test yet, ApplyBoard can help you take
                                                        it
                                                        in the future.
                                                    </small>
                                                </div>

                                                <div class="applyStepBtnArea">
                                                    <button type="botton" id="step-13-next"
                                                        class="applyStepBtn">Next</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="applyStepSec" style="display:none;" id="step-14">
                                            <div
                                                class="d-flex justify-content-between align-items-center applyStepSecHeader mb-4">
                                                <div class="bacck" style="font-size:20px; cursor: pointer;"
                                                    id="step-14-back"><i class="fa-regular fa-arrow-left"></i></div>
                                                <button type="button" class="close" data-dismiss="modal"><i
                                                        class="fa-regular fa-xmark"></i></button>
                                            </div>

                                            <div class="progressBarArea mb-4">
                                                <h6 class="mb-3">Background</h6>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:90%"></div>
                                                </div>
                                            </div>

                                            <div class="applyStepSecinner">
                                                <h4 class="mb-4">What standardized tests have you taken within the
                                                    last
                                                    5 years?
                                                </h4>

                                                <div class="form-group">
                                                    <div class="row rowBox">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdCheckbox  mb-3">
                                                                <input id="ic1" type="checkbox">
                                                                <label for="ic1">GMAT</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdCheckbox  mb-3">
                                                                <input id="ic2" type="checkbox">
                                                                <label for="ic2">GRE</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 columnBox">
                                                            <div class="mdCheckbox  mb-3">
                                                                <input id="ic3" type="checkbox">
                                                                <label for="ic3">I don't have this</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="applyStepBtnArea">
                                                    <button type="botton" class="applyStepBtn" data-toggle="modal"
                                                        data-target="#lastStepModal" id="step-14-next">Explore
                                                        Programs</button>
                                                </div>
                                            </div>

                                            <!-- The Modal -->
                                            <div class="modal lastStepModal" id="lastStepModal">
                                                <div class="modal-dialog lastStepModalDiolog">
                                                    <div class="modal-content lastStepModalContent">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header lastStepModalHeader">
                                                            <h4 class="modal-title">Save changes to your profile?</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><i
                                                                    class="fa-regular fa-xmark"></i></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body lastStepModalBody">
                                                            <p class="mb-3">This will also change your eligibility
                                                                for
                                                                other programs in your cart.</p>
                                                            <div class="applyStepBtnArea">
                                                                <a href="{{ route('frontend.programs') }}"
                                                                    class="applyStepBtn2 mb-3 text-center">Show
                                                                    Result Only</a>
                                                                <a href="{{ route('frontend.programs') }}"
                                                                    class="applyStepBtn text-center">Save &
                                                                    Show
                                                                    Result
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- final modal --}}
                                            {{-- <div class="modal fade" id="final-modal" tabindex="-1" role="dialog"
                                                aria-labelledby="final-modal-center-title" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal
                                                                title</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            {{-- final modal --}}
                                        </div>
                                        <!--<div class="applyStepSec"></div>-->
                                    </div>
                                </form>
                            </div>
                        </div>




                    </div>
                </div>

            </div>


            <div class="pb-4 dashApplyArea">
                <div class="dashApplyHeaderArea mb-4">
                    <h5 class="mb-3">Applying</h5>
                    <h6 class="mb-0">How it works <a href="#"><i class="fa-regular fa-video"></i></a></h6>
                </div>
                <div class="dashBeforeApplyAreainner">
                    <div class="applyStepAccordian">

                        <div class="applyStepAccordianItem disable active">
                            <div class="applyStepAccordianHeader d-flex justify-content-between align-items-center">
                                <div class="leftSide d-flex align-items-center">
                                    <h5 class="title mb-0">Pay Application Fee</h5>
                                </div>
                                <div class="rightSide">
                                    <span class="info" data-toggle="tooltip" data-placement="top"
                                        title="Application fees are charged by schools (and in some case by Apply Board) to process your applications"><i
                                            class="fa-regular fa-circle-info"></i></span>
                                    <span class="arrow"><i class="fa-regular fa-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="applyStepAccordianBody">
                                <div class="headerContent d-flex align-items-center">
                                    <div class="logo mr-3"><img
                                            src="{{ asset('assets/frontend/assets/auth/assets/images/university-dp.jpeg') }}"
                                            class="img-fluid" alt="" style="width:50px;"></div>
                                    <div class="content">
                                        <h5 class="title mb-2">Postgraduate Diploma - Nuclear Decommissioning and Waste
                                            Management</h5>
                                        <p class="location mb-0">University of Birmingham - Edgbaston</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="applyStepAccordianItem disable ">
                            <div class="applyStepAccordianHeader d-flex justify-content-between align-items-center">
                                <div class="leftSide d-flex align-items-center">
                                    <h5 class="title mb-0">Prepare Applications</h5>
                                </div>
                                <div class="rightSide">
                                </div>
                            </div>
                            <div class="applyStepAccordianBody">
                            </div>
                        </div>
                        <div class="applyStepAccordianItem disable ">
                            <div class="applyStepAccordianHeader d-flex justify-content-between align-items-center">
                                <div class="leftSide d-flex align-items-center">
                                    <h5 class="title mb-0">Get Result</h5>
                                </div>
                                <div class="rightSide">
                                </div>
                            </div>
                            <div class="applyStepAccordianBody">
                            </div>
                        </div>
                        <div class="applyStepAccordianItem disable ">
                            <div class="applyStepAccordianHeader d-flex justify-content-between align-items-center">
                                <div class="leftSide d-flex align-items-center">
                                    <h5 class="title mb-0">Finalize Visa & Admission</h5>
                                </div>
                                <div class="rightSide">
                                </div>
                            </div>
                            <div class="applyStepAccordianBody">
                            </div>
                        </div>
                        <div class="applyStepAccordianItem disable ">
                            <div class="applyStepAccordianHeader d-flex justify-content-between align-items-center">
                                <div class="leftSide d-flex align-items-center">
                                    <h5 class="title mb-0">Ready to Enroll</h5>
                                </div>
                                <div class="rightSide">
                                </div>
                            </div>
                            <div class="applyStepAccordianBody">
                            </div>
                        </div>
                        <div class="applyStepAccordianItem disable ">
                            <div class="applyStepAccordianHeader d-flex justify-content-between align-items-center">
                                <div class="leftSide d-flex align-items-center">
                                    <h5 class="title mb-0">Enrollment Confirmed</h5>
                                </div>
                                <div class="rightSide">
                                </div>
                            </div>
                            <div class="applyStepAccordianBody">
                            </div>
                        </div>




                    </div>
                </div>
            </div>

            <div class="highlightbanneSec mb-5">
                <img src="{{ asset('assets/frontend/assets/auth/assets/images/addBanner.svg') }}"
                    class="img-fluid w-100" alt="">
            </div>

            <div class="myAdviserArea">
                <div class="headingSec mb-4">
                    <h3 class="title mb-0">My Advisor</h3>
                </div>
                <div class="myAdviserAreainner">
                    <div class="row rowBox">



                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-flex align-items-center columnBox myAdviserBox">
                            <div class="myAdviserinner">
                                <h5 class="d-flex align-items-center mb-0">
                                    <i class="fa-regular fa-graduation-cap"
                                        style="font-size:40px;margin-right:10px"></i>
                                    <span class="title">Juan Aguilera</span>
                                </h5>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-flex align-items-center columnBox myAdviserBox">
                            <div class="myAdviserinner">
                                <ul class="" style="padding:0;margin:0;">
                                    <li class="d-flex jalign-items-center mb-0" style="list-style-type:none;">
                                        <span class="icon mr-2"><i class="fa-regular fa-envelope"></i></span>
                                        <span class="txt"><a href="#"
                                                style="color:#000;word-break: break-all;">juan.aguilera@applyboard.com</a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-flex align-items-center columnBox myAdviserBox">
                            <div class="myAdviserinner">
                                <ul class="" style="padding:0;margin:0;">
                                    <li class="d-flex align-items-center mb-2" style="list-style-type:none;">
                                        <a href="#" style="">
                                            <span class="icon mr-2"><i class="fa-regular fa-question"></i></span>
                                            <span class="txt">Faq</span>
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center mb-0" style="list-style-type:none;">
                                        <a href="{{ route('frontend.blog') }}" style="">
                                            <span class="icon mr-2"><i class="fa-regular fa-newspaper"></i></span>
                                            <span class="txt">Blog</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
