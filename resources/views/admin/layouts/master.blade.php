<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.inc.header')

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    @include('admin.layouts.inc.navbar')

    @include('admin.layouts.inc.sidebar')

    @yield('main')

    @include('admin.layouts.inc.footer')

    @stack('scripts')
</body>

</html>