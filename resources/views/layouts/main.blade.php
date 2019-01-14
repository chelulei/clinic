<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
@include('partials.head')
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div class="medilife-load"></div>
</div>
<!-- header-->
@include('partials.header')
<!-- #header -->
<main class="site-main">
   @yield('content')
</main>
<!-- start footer Area -->
@include('partials.footer')
<!-- End footer Area -->
@include('partials.scripts')
</body>
</html>