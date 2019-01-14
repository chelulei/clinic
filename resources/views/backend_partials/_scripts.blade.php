<!-- Jquery JS-->
<script src="{{asset('/backend/vendor/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Bootstrap JS-->
<script src="{{asset('/backend/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('/backend/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment-with-locales.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>>
<!-- Vendor JS       -->
<script src="{{asset('/backend/vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('/backend/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('/backend/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('/backend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('/backend/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('/backend/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('/backend/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('/backend/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('/backend/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('/backend/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('/backend/vendor/jasny-bootstrap/js/jasny-bootstrap.js')}}"></script>

<!-- Main JS-->
<script src="{{asset('/backend/js/main.js')}}"></script>

<script>
    $('#DataTable').DataTable();

    $('select').select2({
        theme: "classic"
    });

    //Remove alert
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 4000);

    $('.date').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',
        startDate: '-3d'
    });

</script>