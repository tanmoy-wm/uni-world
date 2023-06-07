<!DOCTYPE html>
<html lang="en">

<head>
    @include('theme.components.fe-auth.head')
</head>

<body>
    <div class="dashboardPagSection">
        <div class="dashmenuOverlay"></div>
        @include('theme.components.fe-auth.sidebar')
        <div class="dashboardPagesWrapper">
            @include('theme.components.fe-auth.topbar')
            @yield('content')
            @include('theme.components.fe-auth.footer')
            @include('theme.components.fe-auth.script')
        </div>
    </div>
</body>

</html>
