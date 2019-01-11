@extends('layouts.backend.main')
@section('title', 'Norsu Clinic | services index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">All services</h2>
                <a href="{{ route('backend.services.create') }}"><button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-plus"></i>Add service</button></a>
            </div>
        </div>
    </div>
    <br>
    @include('backend_partials.messages')
    @if(! $services->count())
        <div class="alert alert-danger m-2">
            No Records
        </div>
        <!-- /.alert alert-danger -->
    @else
        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    @include('backend.services.table')
                </div>
                @endif
            </div>
        </div>
        <!-- /.row -->
@endsection