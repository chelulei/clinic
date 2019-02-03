<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend_partials._head')
    @yield('style')
</head>
<body class="imsition">
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
@include('backend_partials._scripts')
@yield('script')

<!-- ckeditor-->
<script src="{{asset('/backend/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
    CKEDITOR.replace( 'article-ckeditor1' );
    CKEDITOR.replace( 'article-ckeditor2' );
    CKEDITOR.replace( 'article-ckeditor3' );
    CKEDITOR.replace( 'article-ckeditor4' );
</script>
</body>
</html>
<!-- end document-->
