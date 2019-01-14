@extends('layouts.backend.main')
@section('title', 'Norsu Clinic | permissions index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">All permissions</h2>
                <a href="{{ route('backend.permissions.create') }}"><button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-plus"></i>Add permission</button></a>
            </div>
        </div>
    </div>
    <br>
    @include('backend_partials.messages')
    @if(! $permissions->count())
        <div class="alert alert-danger m-2">
            No Records
        </div>
        <!-- /.alert alert-danger -->
    @else
        <div class="row m-t-30">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    @include('backend.permissions.table')
                </div>
                @endif
            </div>
        </div>
        <!-- /.row -->
@endsection