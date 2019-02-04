@extends('layouts.backend.main')

@section('title', 'Clinic | Add new item')

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
            <li class="breadcrumb-item"><a href="{{ route('backend.medicines.index') }}">Back All Medicine</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card card">
                <div class="card-header">
                    <strong>Form</strong>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($inventory, [
                        'method' => 'POST',
                        'route'  => 'backend.inventories.store',
                        'files'  => TRUE,

                    ]) !!}

                    @include('backend.inventory.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
