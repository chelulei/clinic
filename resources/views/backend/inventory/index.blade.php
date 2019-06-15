@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | inventories index')
@section('style')
    <style>
        .loading {
            background: lightgrey;
            padding: 15px;
            position: fixed;
            border-radius: 4px;
            left: 50%;
            top: 50%;
            text-align: center;
            margin: -40px 0 0 -50px;
            z-index: 2000;
            display: none;
        }

        a, a:hover {
            color: white;
        }

        .form-group.required label:after {
            content: " *";
            color: red;
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="page-header float-left pl-2">
            <div class="page-title">
                <h1 class="bread-head">
            @role('secretary')
            <li class="breadcrumb-item"> <a href="{{route('home')}}">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                </a></li>
            @endrole
            @role('doctor')
            <li class="breadcrumb-item"> <a href="{{route('doctor')}}">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                </a></li>
            @endrole
            @role('dentists')
            <li class="breadcrumb-item"> <a href="{{route('dentists')}}">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                </a></li>
            @endrole
                </h1>
            </div>
        </div>
         <div class="float-left pr-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal">
                               <i class="fa fa-thumbs-up" aria-hidden="true"></i> GIVE MEDICINE
                            </button>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="float-right pr-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="#modalForm" data-toggle="modal" data-href="{{url('inventorie/create')}}">
                            <button class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>Add Medicine</button>
                            </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="content mt-3">
        <div class="row">
            <div class="col-sm-12">

              @include('backend_partials.messages')

                @if(! $inventories->count())
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
                                        LIST OF MEDICINES</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body p-4">
                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40">
                                @include('backend.inventory.table')
                            </div>
                            @endif

                        </div>
                    </div>
                    <!-- /.row -->
            </div> <!-- /.12 -->
        </div>
        <!-- /.row -->
    </div>
    <div class="loading">
        <i class="fa fa-refresh fa-spin fa-2x fa-fw"></i><br/>
        <span>Loading</span>
    </div>
@endsection
@include('backend.inventory.script')



