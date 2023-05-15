<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">

                    <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admins.dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('students.index') }}">
                <span class="menu-title">Student</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('agents.index') }}">
                <span class="menu-title">Agents</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('staffs.index') }}">
                <span class="menu-title">Staff</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=" {{ route('universities.index') }}">
                <span class="menu-title">University</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-title">Cources</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Add Courses</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">View Courses</a>
                    </li>
                </ul>
            </div>
        </li>



        <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-title">Manage Category</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#applications" aria-expanded="false"
                aria-controls="applications">
                <span class="menu-title">Applications</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="applications">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">No of
                            applications</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">No of pending
                            applications</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">No of rejects
                            applications</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Paper Applications</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Payments</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#settings" aria-expanded="false"
                aria-controls="settings">
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="settings">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">General
                            Settings</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Locations</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/typography.html">Preferances</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#reports" aria-expanded="false"
                aria-controls="reports">
                <span class="menu-title">Reports</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="reports">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Student</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Agents</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Staff</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Payments</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/typography.html">Applications</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Countries</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Letter Request</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Change Passwords</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#fees" aria-expanded="false"
                aria-controls="fees">
                <span class="menu-title">Fees</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="fees">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Total Fees
                            Paid</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Total Pending
                            Fees</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#resources" aria-expanded="false"
                aria-controls="resources">
                <span class="menu-title">Reports</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="resources">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">List of
                            Courses</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">View
                            Details</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Filters</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Video Courses
                            & Chapters</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Online
                            Payments</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Reports</a>
                    </li>

                </ul>
            </div>
        </li>




        <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
            </div>
        </li> -->
        <li class="nav-item sidebar-actions" style="display:none;">
            <span class="nav-link">
                <div class="border-bottom">
                    <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                    <div class="border-bottom">
                        <p class="text-secondary">Categories</p>
                    </div>
                    <ul class="gradient-bullet-list mt-4">
                        <li>Free</li>
                        <li>Pro</li>
                    </ul>
                </div>
            </span>
        </li>
    </ul>
</nav>
