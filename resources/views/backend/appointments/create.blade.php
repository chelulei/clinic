@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | Users index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h3 class="title-1 text-center">CREATE APPOINTMENT</h3>
                <div class="overview-wrap float-lg-right">
                    <a href="{{ route('backend.appointments.index') }}"><button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-arrow-left"></i>BACK</button></a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row m-t-30">
        <div class="col-md-8 offset-2">
            {!! Form::model($appointment, [
                    'method' => 'POST',
                    'route'  => 'backend.appointments.store',

                ]) !!}

            @include('backend.appointments.form')

            {!! Form::close() !!}

        </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
