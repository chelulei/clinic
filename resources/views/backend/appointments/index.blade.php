@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | Appointments index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">All Appointments</h2>
                <a href="{{ route('backend.appointments.create') }}"><button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-plus"></i>add appointment</button></a>
            </div>
        </div>
    </div>
    <br>
    @include('backend_partials.messages')
    @if(! $appointments->count())
        <div class="alert alert-danger m-2">
            No Records
        </div>
        <!-- /.alert alert-danger -->
    @else
        <div class="card text-center">
            <div class="card-header bg-primary">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">LIST OF APPOINTMENTS</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            @include('backend.appointments.table')
                        </div>
                        @endif
                    </div>
                </div>
            </div></div>
        <!-- /.row -->
@endsection
