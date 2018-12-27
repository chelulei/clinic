
<!doctype html>
<html lang="en">
  <head>
  	@include('partials.head')
  </head>
  <body>
  <div class="container">
    @include('partials.header')
    @include('partials.nav')
  </div>
  <!-- /.container -->
    <main role="main" class="container">
      <div class="row">
        @yield('content')
      </div>
    </main>
  <br>
  <div class="container">
    @include('partials.footer');
  </div>
  <!-- /.container -->
  {{--@include('layout.partials.footer')--}}
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	@include('partials.scripts');
  </body>
</html>
