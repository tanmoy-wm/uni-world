<header class="header-menu-box-shadow">
    <div class="container">
        <div class="row">
            <div class="header-menu-uinw d-flex flex-wrap align-items-center justify-content-center">
                <div class="col-lg-7">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <a class="navbar-brand" href="{{ route('welcome') }}"><img
                                src="{{ asset('assets/frontend/assets/images/logo.png') }}" alt="" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"><span
                                class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('frontend.students') }}">Students</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('frontend.recruiters') }}">Recruitments
                                        Partners</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('frontend.education-partners') }}">Education Partners</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="col-lg-3">
                    <div class="header-search-box">
                        <div>
                            <form class="form-inline">
                                <input class="form-control" type="search" placeholder="Search">
                                <button class="btn btn-outline-success my-2 my-lg-0" type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>

                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('frontend.our-solutions') }}">Our Solutions</a>
                                <a class="dropdown-item" href="{{ route('frontend.our-story') }}">Our Story</a>
                                <a class="dropdown-item" href="{{ route('frontend.careers') }}">Careers</a>
                                <a class="dropdown-item" href="{{ route('frontend.getPrees', ['coverage_type' => 'featured']) }}">Press</a>
                                <a class="dropdown-item" href="{{ route('frontend.life') }}">Life</a>
                                <a class="dropdown-item" href="{{ route('frontend.leaderships') }}">Leadership</a>
                                <a class="dropdown-item" href="{{ route('frontend.contact-us') }}">Contact</a>
                                <a class="dropdown-item" href="{{ route('frontend.getBlogs') }}">Blog</a>
                                <a class="dropdown-item" href="#">ApplyInsights</a>
                                <a class="dropdown-item" href="{{ route('frontend.trends-report') }}">Trends Report</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="sub-btn-regst my-2 my-lg-0">
                        <a href="{{ route('login') }}" class="btn btn-outline-primary" type="submit">Log
                            In</a>
                        <a href="{{ route('frontend.student-register') }}" class="btn btn-primary" type="submit">Sign
                            Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
