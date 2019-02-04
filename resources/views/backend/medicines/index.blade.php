@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | prescriptions index')

@section('content')
    <div class="breadcrumbs">
        <div class="page-header float-left pl-2">
            <div class="page-title">
                <h1 class="bread-head">
                    @role('secretary')
                    <a href="{{route('home')}}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    @endrole
                    @role('doctor')
                    <a href="{{route('doctor')}}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    @endrole
                    @role('dentists')
                    <a href="{{route('dentists')}}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    @endrole

                    <a href="{{ route('backend.inventories.index') }}" class="btn btn-outline-primary ml-2">All Medicines</a>
                </h1>
            </div>
        </div>

    </div>
    <div class="content mt-3">
        <div class="row">
            <div class="col-sm-12">

    @include('backend_partials.messages')
            @if(! $medicines->count())
                <div class="alert alert-danger m-2">
                    No Records
                </div>
                <!-- /.alert alert-danger -->
     @else
                    <div class="card">
                        <div class="card-header bg-primary">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#"><i class="zmdi zmdi-format-align-justify"></i>
                                        Medicine Records</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body P4">
                <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                @include('backend.medicines.table')
            </div>
    @endif
                        </div>
                    </div>


            </div> <!-- /.12 -->
        </div>
        <!-- /.row -->
    </div>
@endsection


