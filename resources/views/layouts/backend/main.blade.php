<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend_partials._head')
    @yield('style')
    <script src="{{asset('/backend/vendor/tinymce/plugin/tinymce/tinymce.min.js')}}"></script>
    <script>tinymce.init({
            selector:'textarea',
            setup : function(ed)
            {
                ed.on('init', function()
                {
                    this.execCommand("fontName", false, "tahoma");
                    this.execCommand("fontSize", false, "12px");
                });
            }  ,
                        menubar:'false',
             toolbar: "styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link fontsizeselect |",
              relative_urls: false
    });</script>
</head>
<body class="animsiti">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
@include('layouts.backend.header-mobile')
    <!-- END HEADER MOBILE-->
    <!-- MENU SIDEBAR-->
@include('layouts.backend.sidebar')
    <!-- END MENU SIDEBAR-->
    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
    @include('layouts.backend.header-desktop')
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                 @yield('content')
                    <div class="row">
                        <div class="col-md-12">
                            @include('backend_partials._footer')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>
</div>

  @include('backend_partials._modal')
 <!-- modal-->
  @include('backend_partials._scripts')
  @yield('script')

</body>
</html>
<!-- end document-->

