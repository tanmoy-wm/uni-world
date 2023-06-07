<!DOCTYPE html>
<html lang="en">

<head>
    @include('theme.components.fe-guest.head')
</head>

<body>
    @include('theme.components.fe-guest.topbar')
    @yield('content')
    @include('theme.components.fe-guest.footer')
    @include('theme.components.fe-guest.script')
</body>

</html>
