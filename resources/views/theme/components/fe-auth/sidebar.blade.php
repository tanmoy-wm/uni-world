<div class="dashmenuOverlay"></div>
<div class="dashboardMenuArea">
    <div class="dashboardMenuFldArea">
        <div class="dashboardMenuFldAreainner">
            <div class="dasboardMenuProfArea">
                <div class="dasboardMenuProfAreainner"></div>
            </div>

            <div class="dashboardMenuAreainner">
                <div class="dasboardMenu">
                    <div class="dasboardMenuinner">
                        <ul class="dasboardMenuWrap">
                            @if (Auth::user()->profile_type === 'App\Models\Admin')
                                <li>
                                    <a href="{{ route('auth.profile') }}">
                                        <span class="icon"><i class="fa-solid fa-gauge-high"></i></i></span>
                                        <span class="title">Backend Dashboard</span>
                                    </a>
                                </li>
                            @endif

                            @if (Auth::user()->profile_type === 'App\Models\Agent')
                                <li>
                                    <a href="{{ route('frontend.agent.dashboard') }}">
                                        <span class="icon"><i class="fa-solid fa-gauge-high"></i></i></span>
                                        <span class="title">Home</span>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('auth.dashboard') }}">
                                        <span class="icon"><i class="fa-regular fa-house-chimney"></i></span>
                                        <span class="title">Home</span>
                                    </a>
                                </li>
                            @endif

                            <li>
                                <a href="{{ route('frontend.programs') }}">
                                    <span class="icon"><i class="fa-regular fa-magnifying-glass"></i></span>
                                    <span class="title">Programs & Schools</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('agent.student') }}">
                                    <span class="icon"><i class="fa-solid fa-graduation-cap"></i></i></span>
                                    <span class="title">Students</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('auth.profile') }}">
                                    <span class="icon"><i class="fa-regular fa-circle-user"></i></span>
                                    <span class="title">Profile</span>
                                </a>
                            </li>

                            <li class="active">
                                <a href="#">
                                    <span class="icon"><i class="fa-regular fa-file-text"></i></span>
                                    <span class="title">My Applications</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <span class="icon"><i class="fa-regular fa-circle-dollar"></i></span>
                                    <span class="title">Payments</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('auth.logout') }}">
                                    <span class="icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                                    <span class="title">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
