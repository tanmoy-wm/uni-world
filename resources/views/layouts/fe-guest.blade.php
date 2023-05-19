<!DOCTYPE html>
<html lang="en">

<head>
    @include('theme.components.fe-guest.head')
</head>

<body>
    @include('theme.components.fe-guest.topbar')
    <section class="sub-login-bg">
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </section>

    @include('theme.components.fe-guest.footer')
    @include('theme.components.fe-guest.script')
</body>

</html>
