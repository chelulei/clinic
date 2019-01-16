@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | Events index')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1"> Full Calendar</h2>
                <a href="{{ route('backend.events.create')}}"><button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-plus"></i>add Event</button></a>
            </div>
        </div>
    </div>
    <br>
        <div class="row m-t-30">
            <div class="col-md-12">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif
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
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                defaultView: 'agendaWeek',
                events : [
                        @foreach($working_hours as $hour)
                    {
                        title : '{{ $hour->title}}',
                        start : '{{ $hour->start_date }}',
                        end : '{{ $hour->end_date}}',
                        url : '{{ route('backend.events.edit', $hour->id) }}'
                    },
                    @endforeach
                ]
            })
        });
    </script>
@endsection

