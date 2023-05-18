<!DOCTYPE html>
<html lang="en">

<head>
    @include('theme.components.backend.head')
</head>

<body>
    <div class="container-scroller">
        @include('theme.components.backend.topbar')
        <div class="container-fluid page-body-wrapper">
            @include('theme.components.backend.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('theme.components.backend.footer')
            </div>
        </div>
    </div>
    @include('theme.components.backend.scripts')
</body>

</html>
