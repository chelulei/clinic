

<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/easing.min.js')}}"></script>
<script src="{{asset('js/hoverIntent.js')}}"></script>
<script src="{{asset('js/superfish.min.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.tabs.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/mail-script.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>')}}


<script>
 //Remove alert
    window.setTimeout(function() {
        $(".alert").not('.alert-important').fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 5000);
</script>
