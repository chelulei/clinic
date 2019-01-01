@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | doctors index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">All doctors</h2>
                <a href="{{ route('backend.doctors.create') }}"><button class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-plus"></i>add doctor</button></a>
            </div>
        </div>
    </div>
    <br>
    @include('backend_partials.messages')
            @if(! $doctors->count())
                <div class="alert alert-danger m-2">
                    No Records
                </div>
                <!-- /.alert alert-danger -->
    @else
    <div class="row m-t-30">
        <div class="col-md-12">
                <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                @include('backend.doctors.table')
            </div>
    @endif
        <div class="float-left">
            <nav aria-label="Page navigation example float-left">
                {{$doctors->render()}}
            </nav>
        </div>
        <div class="float-right">
            <small>{{$doctorCount}} {{str_plural('doctor',$doctorCount)}}</small>
        </div>
    </div>
    </div>
    <!-- /.row -->
@endsection


