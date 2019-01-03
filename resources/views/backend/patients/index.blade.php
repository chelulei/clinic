@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | patients index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">All Patients</h2>
                <a href="{{ route('backend.patients.create') }}"><button class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-plus"></i>add patient</button></a>
            </div>
        </div>
    </div>
    <br>
    @include('backend_partials.messages')
            @if(! $patients->count())
                <div class="alert alert-danger m-2">
                    No Records
                </div>
                <!-- /.alert alert-danger -->
    @else
    <div class="row m-t-30">
        <div class="col-md-12">
                <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                @include('backend.patients.table')
            </div>
    @endif
        <div class="float-left">
            <nav aria-label="Page navigation example float-left">
                {{$patients->render()}}
            </nav>
        </div>
        <div class="float-right">
            <small>{{$patientCount}} {{str_plural('patient',$patientCount)}}</small>
        </div>
    </div>
    </div>
    <!-- /.row -->
@endsection


