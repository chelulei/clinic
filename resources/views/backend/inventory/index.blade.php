@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | inventories index')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
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
            <li class="breadcrumb-item"><a href="{{ route('backend.medicines.create') }}">Give Medicine</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.inventories.create') }}">Add Medicine</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.medicines.index') }}">Medicine History</a></li>
        </ol>
    </nav>
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
@endsection


