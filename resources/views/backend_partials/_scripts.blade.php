<!-- Jquery JS-->
<script src="{{asset('/backend/vendor/jquery-3.2.1.min.js')}}"></script>


<!-- dataTables JS-->

<script src="{{asset('/backend/vendor/dataTables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/buttons.flash.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/jszip.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/pdfmake.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/vfs_fonts.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/buttons.html5.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/buttons.print.min.js')}}"></script>


<!-- Bootstrap JS-->
<script src="{{asset('/backend/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('/backend/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{asset('/backend/vendor/dataTables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/buttons.colVis.min.js')}}"></script>


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


    $(document).ready(function() {
        $('#DataTable').DataTable( {
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );


    $('select').select2({
        theme: "classic"
    });

    //Remove alert
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 4000);

    $("#datepicker").datetimepicker({

        // useCurrent: false,
        format: "L"
    });
    $("#datepick").datetimepicker({

        format: "L"
    });


    $("#timepicker").datetimepicker({
        format: "LT"
    });

    $("#timepicker2").datetimepicker({
        format: "LT"
    });
    $("#slot").datetimepicker({
        format: "LT"
    });


        $(document).ready(function () {
            $('[data-toggle=confirmation]').confirmation({
                rootSelector: '[data-toggle=confirmation]',
                onConfirm: function (event, element) {
                    element.trigger('confirm');
                }
            });


            $(document).on('confirm', function (e) {
                var ele = e.target;
                e.preventDefault();


                $.ajax({
                    url: ele.href,
                    type: 'DELETE',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        if (data['success']) {
                            $("#" + data['tr']).slideUp("slow");
                            alert(data['success']);
                        } else if (data['error']) {
                            alert(data['error']);
                        } else {
                            alert('Whoops Something went wrong!!');
                        }
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });


                return false;
            });
        });
</script>
