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

        @if (auth()->user()->profile_type === 'App\Models\Admin')
            <div>
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
                    <a class="nav-link" href="{{ route('blogs.index') }}">
                        <span class="menu-title">Blog</span>
                        <i class="mdi mdi-table-large menu-icon"></i>
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
                    <a class="nav-link" href=" {{ route('programs.index') }}">
                        <span class="menu-title">Programs</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">
                        <span class="menu-title">Category</span>
                        <i class="mdi mdi-contacts menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('countries.index') }}">
                        <span class="menu-title">Countries</span>
                        <i class="mdi mdi-contacts menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('applications.index') }}">
                        <span class="menu-title">Applications</span>
                        <i class="mdi mdi-table-large menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('payments.index') }}">
                        <span class="menu-title">Payments</span>
                        <i class="mdi mdi-table-large menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('press.index') }}">
                        <span class="menu-title">Press</span>
                        <i class="mdi mdi-table-large menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#settings" aria-expanded="false"
                        aria-controls="settings">
                        <span class="menu-title">Settings</span>
                        <i class="menu-arrow"></i>
                        <i class="fa-regular fa-gear"></i>
                    </a>

                    <div class="collapse" id="settings">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('general.index') }}">General
                                    Settings</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Locations</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Preferances</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#reports" aria-expanded="false"
                        aria-controls="reports">
                        <span class="menu-title">Reports</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-chart-arc menu-icon"></i>
                    </a>
                    <div class="collapse" id="reports">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('reports.agent') }}">Agents</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('reports.application') }}">Applications</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="{{ route('reports.payment') }}">Payments</a>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('reports.staff') }}">Staff</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="{{ route('reports.student') }}">Student</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('letter-request.index') }}">
                        <span class="menu-title">Letter Request</span>
                        <i class="mdi mdi-table-large menu-icon"></i>
                    </a>
                </li>
                </template>
            @elseif (Auth::user()->profile_type === 'App\Models\University')
                <div>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('backend.dashboard', ['username' => Auth::user()->profile->username]) }}">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{ route('university.programs-index', ['username' => auth()->user()->profile->username]) }}">
                            <span class="menu-title">Programs</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                </div>
        @endif
    </ul>
</nav>
