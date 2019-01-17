<!doctype html>
<html lang="en">
<head>
    @include('backend_partials._head')
</head>
<body class="animsition">
<div class="page-wrapper">
        @yield('content')
    </div>
    <!-- END PAGE CONTAINER-->
</div>
@include('backend_partials._scripts');
@yield('script')
</body>
</html>
