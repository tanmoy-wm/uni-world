@extends('layouts.fe-auth')
@section('content')
    {{-- <div class="container m-4">
        <div class="row d-flex">
            <div class="col-md-12 d-flex justify-content-around">
                <h3 class="m-3 ">Welcome, {{ Auth::user()->name }}!</h3>
                <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#crateStudentModal"><i
                        class="fa-solid fa-plus"></i> Add Student</button>
            </div>
        </div> --}}

    <div class="dashboardDtlsArea">
        <div class="dashboardDtlsAreainner">
            <div class="applicationSecArea">
                <div class="pt-4 pb-4 d-flex justify-content-between align-items-center headingSec dashboardHeadingSec">
                    <div class="leftSide">
                        <h2 class="title mb-0">Welcome, {{ Auth::user()->name }}!</h2>
                    </div>
                    <div class="rightSide">
                        <button class="addNewStudentBtn" data-toggle="modal" data-target="#addStudentModal"><i
                                class="fa-regular fa-plus"></i> <span class="txt">Add
                                new student</span></button>
                    </div>
                </div>
                <div class="analytics_card_area">
                    <div class="row row_flex row_box">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column_box">
                            <div class="dashboard_card analytics_card">
                                <div class="dashboard_card_body analytics_card_body">
                                    <div class="dash-widget-header">
                                        <span class="dash-widget-icon bg-1">
                                            <img src="{{ asset('assets/frontend/assets/auth/assets/images/applications.jpeg') }}"
                                                class="img-fluid" alt="">
                                        </span>
                                        <div class="dash-count">
                                            <div class="dash-counts">
                                                <p class="">0</p>
                                            </div>
                                            <div class="dash-title">Application</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column_box">
                            <div class="dashboard_card analytics_card">
                                <div class="dashboard_card_body analytics_card_body">
                                    <div class="dash-widget-header">
                                        <span class="dash-widget-icon bg-1">
                                            <img src="{{ asset('assets/frontend/assets/auth/assets/images/applications.jpeg') }}"
                                                class="img-fluid" alt="">
                                        </span>
                                        <div class="dash-count">
                                            <div class="dash-counts">
                                                <p class="">0</p>
                                            </div>
                                            <div class="dash-title">Accepted</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column_box">
                            <div class="dashboard_card analytics_card">
                                <div class="dashboard_card_body analytics_card_body">
                                    <div class="dash-widget-header">
                                        <span class="dash-widget-icon bg-1">
                                            <img src="{{ asset('assets/frontend/assets/auth/assets/images/applications.jpeg') }}"
                                                class="img-fluid" alt="">
                                        </span>
                                        <div class="dash-count">
                                            <div class="dash-counts">
                                                <p class="">0</p>
                                            </div>
                                            <div class="dash-title">Rejected</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column_box">
                            <div class="dashboard_card analytics_card">
                                <div class="dashboard_card_body analytics_card_body">
                                    <div class="dash-widget-header">
                                        <span class="dash-widget-icon bg-1">
                                            <img src="{{ asset('assets/frontend/assets/auth/assets/images/applications.jpeg') }}"
                                                class="img-fluid" alt="">
                                        </span>
                                        <div class="dash-count">
                                            <div class="dash-counts">
                                                <p class="">0</p>
                                            </div>
                                            <div class="dash-title">Student</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="row row_box">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-12 column_box">
                            <div class="headingSec mb-4">
                                <h5 class="title mb-1">Recently opened programs</h5>
                                <p class="mb-1"><small>Last updated 2 weeks ago</small></h6>
                                <p>Showing to 10 programs that are recently opened for fall 2023 and Winter 2024 intake
                                    that opened after March 1st based on historical application</p>
                            </div>
                            <div class="dashTableArea">
                                <div class="table-responsive responsive_table_area">
                                    <table id="example" class="table table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <!--<th>Company</th>-->
                                                <th>Program Name</th>
                                                <th>School Name</th>
                                                <th>School Address</th>
                                                <th>Submission Deadline</th>
                                                <th>Intake</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="order_item">
                                                <td data-title="Program Name">
                                                    <div class="">
                                                        Program Name
                                                    </div>
                                                </td>
                                                <td data-title="School Name">
                                                    <div class="">
                                                        School Name
                                                    </div>
                                                </td>
                                                <td data-title="School Address">
                                                    <div class="">School Address</div>
                                                </td>
                                                <td data-title="Submission Deadline">
                                                    <div class="">Submission Deadline</div>
                                                </td>
                                                <td data-title="Intake">
                                                    <div class="">Intake</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 column_box">
                            <div class="dashSideBar">
                                <div class="dashSideBarWidget">
                                    <div class="dashSideBarWidgetHeader">
                                        <h5 class="title mb-0">Popular Links</h5>
                                    </div>
                                    <div class="dashSideBarWidgetBody">
                                        <ul class="dashSideBarList dashSideBarList-1">
                                            <li>
                                                <a href="#" class="">
                                                    <span class="icon"><i class="fa-regular fa-message-lines"></i></span>
                                                    <span class="txt">WhatsApp chat</span>
                                                    <span class="new"><i class="fa-solid fa-circle"></i> New</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="">
                                                    <span class="icon"><i
                                                            class="fa-regular fa-message-lines"></i></span>
                                                    <span class="txt">Assist-knowledge</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="">
                                                    <span class="icon"><i
                                                            class="fa-regular fa-message-lines"></i></span>
                                                    <span class="txt">Assist-knowledge</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="">
                                                    <span class="icon"><i
                                                            class="fa-regular fa-message-lines"></i></span>
                                                    <span class="txt">Assist-knowledge</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="">
                                                    <span class="icon"><i
                                                            class="fa-regular fa-message-lines"></i></span>
                                                    <span class="txt">Assist-knowledge</span>
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
        </div>
    </div>

    {{-- start create student modal --}}
    {{-- <div class="modal fade" id="crateStudentModal" tabindex="-1" aria-labelledby="crateStudentModalLabel"
        aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 600px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createBtn">Add new student</h5>
                    <button type="button" class="close" data-toggle="modal" data-target="#createModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="form-sample" id="createStudent" action="{{ route('agent.student.store') }}"
                        method="POST">
                        @csrf
                        @if ($errors->any())
                            @include('theme.components.backend.errors', ['errors' => $errors])
                        @endif
                        <h5>Personal Information</h5>
                        @csrf
                        <div class="form-group">
                            <label for="first-name" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" type="text" id="first-name"
                                name="first_name" />
                        </div>

                        <div class="form-group">
                            <label for="middle-text" class="col-form-label">Middle Name</label>
                            <input class="form-control" type="text" id="middle-name" name="middle_name" />
                        </div>

                        <div class="form-group">
                            <label for="last-name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" id="last-name" name="last_name" />
                        </div>

                        <div class="form-group">
                            <label for="dob" class="col-form-label">Date of Birth</label>
                            <input class="form-control" type="date" id="dob" name="dob" />
                        </div>

                        <div class="form-group">
                            <label for="dob" class="col-form-label">Country of Citizenship</label>
                            <select class="form-control" name="country " required>
                                @forelse ($countries as $country)
                                    <option value="{{ $country->name }}">{{ $country->name }}
                                    </option>
                                @empty
                                    <option value="">No Country Found</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="passport_number" class="col-form-label">Passport Number</label>
                            <input class="form-control" type="text" id="passport_number" name="passport_number" />
                            <span class="text-muted text-sm">Passport number is optional, but strongly recommended.</span>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-form-label">Gender</label>
                            <select class="form-control" name="gender" id="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <h5>Personal Information</h5>

                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input class="form-control" type="email" id="email" name="email" />
                        </div>

                        <div class="form-group">
                            <label for="country_code" class="col-form-label">Country Code</label>
                            <select class="form-control" id="country_code" name="country_code" required>
                                @forelse ($countries as $country)
                                    <option value="{{ $country->dial_code }}">
                                        {{ $country->name }}
                                        {{ $country->dial_code }}</option>
                                @empty
                                    <option value="">No Country Code Found</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="mobile_number" class="col-form-label">Mobile number</label>
                            <input class="form-control" type="mobile_number" id="mobile_number" name="mobile_number" />
                        </div>

                        <h5>Lead Management</h5>

                        <div class="form-group">
                            <label for="status" class="col-form-label">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="">Please choose a status</option>
                                <option value="new_lead">New lead</option>
                                <option value="follow_up">Follow up</option>
                                <option value="ready_to_apply">Ready to apply</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="referral_source" class="col-form-label">Referral Source</label>
                            <select class="form-control" id="referral_source" name="referral_source" required>
                                <option value="">Please choose a referral source</option>
                                <option value="walk_in">Walk in</option>
                                <option value="facebook">Facebook</option>
                                <option value="youtube">Youtube</option>
                                <option value="client">Client</option>
                                <option value="another_student">Another student</option>
                                <option value="friend">Friend</option>
                                <option value="staff">Staff</option>
                                <option value="in_person_event">In person event</option>
                                <option value="virtual_event">Virtual event</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="country_of_interest" class="col-form-label">Country of interest</label>
                            <select class="form-control" id="country_of_interest" name="country_of_interest" required>
                                @forelse ($countries as $country)
                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                @empty
                                    <option value="">No Country Found</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="service_of_interest" class="col-form-label">Service of interest</label>
                            <select class="form-control" id="service_of_interest" name="service_of_interest" required>
                                <option value="">Please choose a service of interest</option>
                                <option value="programs">Programs</option>
                                <option value="scholarships">Scholarships</option>
                                <option value="visa_services">Visa Service</option>
                                <option value="bank_account">Bank Account</option>
                                <option value="tourism">Tourism</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary ml-2">Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- end create student modal --}}


    <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="addStudentModalLabel"
        aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document" style="max-width: 700px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-sample" id="createStudent" action="{{ route('frontend.agent.store') }}"
                        method="POST">
                        @csrf
                        @if ($errors->any())
                            @include('theme.components.backend.errors', ['errors' => $errors])
                        @endif
                        <h5>Personal Information</h5>
                        @csrf
                        <div class="form-group">
                            <label for="first-name" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" type="text" id="first-name" name="first_name"
                                required />
                        </div>

                        <div class="form-group">
                            <label for="middle-text" class="col-form-label">Middle Name</label>
                            <input class="form-control" type="text" id="middle-name" name="middle_name" required />
                        </div>

                        <div class="form-group">
                            <label for="last-name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" id="last-name" name="last_name" required />
                        </div>

                        <div class="form-group">
                            <label for="dob" class="col-form-label">Date of Birth</label>
                            <input class="form-control" type="date" id="dob" name="dob" required />
                        </div>

                        <div class="form-group">
                            <label for="dob" class="col-form-label">Country of Citizenship</label>
                            <select class="form-control" name="country " required>
                                @forelse ($countries as $country)
                                    <option value="{{ $country->name }}">{{ $country->name }}
                                    </option>
                                @empty
                                    <option value="">No Country Found</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="passport_number" class="col-form-label">Passport Number</label>
                            <input class="form-control" type="text" id="passport_number" name="passport_number"
                                required />
                            <span class="text-muted text-sm">Passport number is optional, but strongly recommended.</span>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-form-label">Gender</label>
                            <select class="form-control" name="gender" id="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <h5>Personal Information</h5>

                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input class="form-control" type="email" id="email" name="email" required />
                        </div>

                        <div class="form-group">
                            <label for="country_code" class="col-form-label">Country Code</label>
                            <select class="form-control" id="country_code" name="country_code" required>
                                @forelse ($countries as $country)
                                    <option value="{{ $country->dial_code }}">
                                        {{ $country->name }}
                                        {{ $country->dial_code }}</option>
                                @empty
                                    <option value="">No Country Code Found</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="mobile_number" class="col-form-label">Mobile number</label>
                            <input class="form-control" type="mobile_number" id="mobile_number" name="mobile_number"
                                required />
                        </div>

                        <h5>Lead Management</h5>

                        <div class="form-group">
                            <label for="status" class="col-form-label">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="">Please choose a status</option>
                                <option value="new_lead">New lead</option>
                                <option value="follow_up">Follow up</option>
                                <option value="ready_to_apply">Ready to apply</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="referral_source" class="col-form-label">Referral Source</label>
                            <select class="form-control" id="referral_source" name="referral_source" required>
                                <option value="">Please choose a referral source</option>
                                <option value="walk_in">Walk in</option>
                                <option value="facebook">Facebook</option>
                                <option value="youtube">Youtube</option>
                                <option value="client">Client</option>
                                <option value="another_student">Another student</option>
                                <option value="friend">Friend</option>
                                <option value="staff">Staff</option>
                                <option value="in_person_event">In person event</option>
                                <option value="virtual_event">Virtual event</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="country_of_interest" class="col-form-label">Country of interest</label>
                            <select class="form-control" id="country_of_interest" name="country_of_interest" required>
                                @forelse ($countries as $country)
                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                @empty
                                    <option value="">No Country Found</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="service_of_interest" class="col-form-label">Service of interest</label>
                            <select class="form-control" id="service_of_interest" name="service_of_interest" required>
                                <option value="">Please choose a service of interest</option>
                                <option value="programs">Programs</option>
                                <option value="scholarships">Scholarships</option>
                                <option value="visa_services">Visa Service</option>
                                <option value="bank_account">Bank Account</option>
                                <option value="tourism">Tourism</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary ml-2">Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
