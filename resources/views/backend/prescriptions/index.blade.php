@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | prescriptions index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">All Prescriptions</h2>
                <a href="{{ route('backend.prescriptions.create') }}"><button class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-plus"></i>add prescription</button></a>
            </div>
        </div>
    </div>
    <br>
    @include('backend_partials.messages')
            {{--@if(! $prescriptions->count())--}}
                <div class="alert alert-danger m-2">
                    No Records
                </div>
                <!-- /.alert alert-danger -->
     {{--@else--}}
    <div class="row m-t-30">
        <div class="col-md-12">
                <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                @include('backend.prescriptions.table')
            </div>
    {{--@endif--}}
    </div>
    </div>
    <!-- /.row -->
@endsection


