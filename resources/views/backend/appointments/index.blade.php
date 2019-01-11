@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | Events index')
@section('style')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1"> Full Calendar</h2>
                <a href="{{ url('event/add')}}"><button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-plus"></i>add Event</button></a>
            </div>
        </div>
    </div>
    <br>
    <div class="row m-t-30">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body" >
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    @include('backend.appointments.modal')
@endsection
@section('script')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                defaultView: 'agendaWeek',
                events : [
                        @foreach($appointments as $appointment)
                    {
                        id: '{{ $appointment->id }}',
                        title : '{{ $appointment->client->first_name . ' ' . $appointment->client->last_name }}',
                        start : '{{ $appointment->start_time }}',
                        @if ($appointment->finish_time)
                        end: '{{ $appointment->finish_time }}',
                        @endif
                    },
                    @endforeach
                ],
                eventClick: function(calEvent, jsEvent, view) {
                    $('#event_id').val(calEvent._id);
                    $('#appointment_id').val(calEvent.id);
                    $('#start_time').val(moment(calEvent.start).format('YYYY-MM-DD HH:mm:ss'));
                    $('#finish_time').val(moment(calEvent.end).format('YYYY-MM-DD HH:mm:ss'));
                    $('#editModal').modal();
                }
            });
            // ... All the calendar functionality

            $('#appointment_update').click(function(e) {
                e.preventDefault();
                var data = {
                    _token: '{{ csrf_token() }}',
                    appointment_id: $('#appointment_id').val(),
                    start_time: $('#start_time').val(),
                    finish_time: $('#finish_time').val(),
                };

                $.post('{{ route('appointments.ajax_update') }}', data, function( result ) {
                    $('#calendar').fullCalendar('removeEvents', $('#event_id').val());

                    $('#calendar').fullCalendar('renderEvent', {
                        title: result.appointment.client.first_name + ' ' + result.appointment.client.last_name,
                        start: result.appointment.start_time,
                        end: result.appointment.finish_time
                    }, true);

                    $('#editModal').modal('hide');
                });
            });
        });
    </script>
@endsection

