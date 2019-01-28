@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | Users index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1"> Full Calendar</h2>
            </div>
        </div>
    </div>
    <br>
    <div class="row m-t-30">
        <div class="col-md-12">
            {!! Form::model($event, [
                 'method' => 'PUT',
                 'route'  => ['backend.events.update', $event->id],

             ]) !!}


            @include('backend.events.form')

            {!! Form::close() !!}

        </div>
    </div>
    </div>
    <!-- /.row -->
@endsection
