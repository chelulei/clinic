
<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.head')

</head>

<body>
<!-- Preloader -->
<div id="preloader">
  <div class="medilife-load"></div>
</div>

<!-- ***** Header Area Start ***** -->
@include('partials.header')
<!-- ***** Header Area End ***** -->

<!-- ***** Hero Area Start ***** -->
@include('partials.section')
<!-- ***** Hero Area End ***** -->

<!-- ***** Book An Appoinment Area Start ***** -->
@include('partials.appointment')
<!-- ***** Book An Appoinment Area End ***** -->
@include('partials.about_section')
<!-- ***** About Us Area Start ***** -->

<!-- ***** About Us Area End ***** -->

<!-- ***** Cool Facts Area Start ***** -->
@include('partials.cool_section')
<!-- ***** Cool Facts Area End ***** -->

<!-- ***** Gallery Area Start ***** -->
@include('partials.gallery')
<!-- ***** Gallery Area End ***** -->

<!-- ***** Features Area Start ***** -->
@include('partials.features')
<!-- ***** Features Area End ***** -->

<!-- ***** Blog Area Start ***** -->
@include('partials.blog')
<!-- ***** Blog Area End ***** -->

<!-- ***** Emergency Area Start ***** -->
@include('partials.emergency')
<!-- ***** Emergency Area End ***** -->

<!-- ***** Footer Area Start ***** -->
@include('partials.footer')
<!-- ***** Footer Area End ***** -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
@include('partials.scripts');

</body>

</html>