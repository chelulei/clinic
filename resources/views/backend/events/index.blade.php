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
                <a href="{{ url('event/add')}}"><button class="au-btn au-btn-icon au-btn--blue">
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
                        {!! $calendar->calendar() !!}
                    </div>
                </div>
        </div>
        </div>
        <!-- /.row -->
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    {!! $calendar->script() !!}
@endsection

