<!DOCTYPE html>
<html lang="en">

<head>
    @include('theme.components.fe-auth.head')
</head>

<body>
    @include('theme.components.fe-auth.topbar')
    @yield('content')
    @include('theme.components.fe-auth.footer')
    @include('theme.components.fe-auth.script')
</body>

</html>
