@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | employees index')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('backend.patients.index')}}">Patient List</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('backend.prescriptions.index')}}">Prescriptions</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('backend.appointments.index')}}">Appointments</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('event')}}">Calendar</a></li>
        </ol>
    </nav>

    <div class="content mt-3">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bg-primary p-2 mb-2 text-white text-center">
                                        Profile
                                    </div>
                                </div>
                                <!-- /.col-md-12 -->
                                <div class="col-md-3 col-lg-3 " align="center">
                                    <img src="{{ URL::to('/') }}/img/default.png" alt="">
                                </div>

                                <!-- /.col-m-3 -->
                                <div class="col-md-4">
                                    Name: <strong>{{$user->name}}</strong><hr>
                                    Email: <strong>{{$user->email}}</strong><hr>
                                    Gender: <strong></strong><hr>
                                    Date Of Birth: <strong></strong><hr>
                                </div>
                                <div class="col-md-4">
                                    Residential address:<strong></strong><hr>
                                    Telephone No: <strong></strong><hr>
                                    Email: <strong></strong><hr>
                                </div>
                            </div>
                            <!-- /.div -->
                         <button CLASS="btn btn-lg  btn-primary">UPDATE</button>
                        </div>
                    </div>
                </div>

            </div>
    </div><!-- .content -->
@endsection
