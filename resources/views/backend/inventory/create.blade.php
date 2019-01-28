@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | Users index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Create Event</h2>
            </div>
        </div>
    </div>
    <br>
    <div class="row m-t-30">
        <div class="col-md-12">
            {!! Form::model($event, [
                    'method' => 'POST',
                    'route'  => 'backend.events.store',

                ]) !!}

            @include('backend.events.form')

            {!! Form::close() !!}

        </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
