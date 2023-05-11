<!DOCTYPE html>
<html lang="en">

<head>
    @include('themeComponents.head')
</head>

<body>
    <div class="container-scroller">
        @include('themeComponents.topbar')
        <div class="container-fluid page-body-wrapper">
            @include('themeComponents.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('themeComponents.footer')
            </div>
        </div>
    </div>
    @include('themeComponents.scripts')
</body>

</html>
