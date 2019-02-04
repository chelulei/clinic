<script type="text/javascript">
    var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

    function GetClock(){
        var d=new Date();
        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
        var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

        if(nhour==0){ap=" AM";nhour=12;}
        else if(nhour<12){ap=" AM";}
        else if(nhour==12){ap=" PM";}
        else if(nhour>12){ap=" PM";nhour-=12;}

        if(nmin<=9) nmin="0"+nmin;
        if(nsec<=9) nsec="0"+nsec;
        if(document.getElementById("clockbox") != null){
        var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
        document.getElementById('clockbox').innerHTML=clocktext;}
    }

    GetClock();
    setInterval(GetClock,1000);
</script>

<!-- Jquery JS-->
<script src="{{asset('/backend/vendor/jquery-3.2.1.min.js')}}"></script>


<!-- dataTables JS-->

<script src="{{asset('/backend/vendor/dataTables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/buttons.flash.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/jszip.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/pdfmake.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/vfs_fonts.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/buttons.html5.min.js')}}"></script>
<script src="{{asset('/backend/vendor/dataTables/buttons.print.min.js')}}"></script>


<script src="{{asset('/backend/js/sweetalert.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('/backend/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('/backend/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>




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

        $("#seeAnotherFieldGroup").change(function() {
            if ($(this).val() == "student") {
                $('#otherFieldGroupDiv').show();
                $('#otherField1').attr('required','');
                $('#otherField1').attr('data-error', 'This field is required.');
                $('#otherField2').attr('required','');
                $('#otherField2').attr('data-error', 'This field is required.');
            } else {
                $('#otherFieldGroupDiv').hide();
                $('#otherField1').removeAttr('required');
                $('#otherField1').removeAttr('data-error');
                $('#otherField2').removeAttr('required');
                $('#otherField2').removeAttr('data-error');
            }
        });

        $("#seeAnotherFieldGroup").trigger("change");


        $("#seeAnotherFieldGroup").change(function() {

            if ($(this).val() == "staff" || $(this).val() == "guest") {
                $('#staffFieldGroupDiv').show();
                $('#staffField1').attr('required','');
                $('#staffField1').attr('data-error', 'This field is required.');
                $('#staffField2').attr('required','');
                $('#staffField2').attr('data-error', 'This field is required.');
            } else {
                $('#staffFieldGroupDiv').hide();
                $('#staffField1').removeAttr('required');
                $('#staffField1').removeAttr('data-error');
                $('#staffField2').removeAttr('required');
                $('#staffField2').removeAttr('data-error');
            }
        });

        $("#seeAnotherFieldGroup").trigger("change");

        
        $('#DataTable').DataTable( {
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
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

        $(".btn-group, .dropdown").hover(
            function () {
                $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).addClass('open');
            },
            function () {
                $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).removeClass('open');
            });


        /*counter dashboard*/
        function getCount() {
            $.ajax({
                url: "/count",
                success: function (data) {
                    $('#patients').text(data.patientCount);
                    $('#prescriptions').text(data.prescriptionCount);
                    $('#appointments').text(data.appointmentCount);
                    $('#events').text(data.eventCountCount);
                    setTimeout(getCount, 1000);
                }
            });
        }

        getCount();




    });
</script>
