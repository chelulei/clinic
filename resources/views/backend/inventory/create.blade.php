@extends('layouts.backend.main')

@section('title', 'Clinic | Add new item')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @role('secretary')
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            @endrole
            @role('doctor')
            <li class="breadcrumb-item"><a href="/doctor">Dashboard</a></li>
            @endrole
            @role('dentists')
            <li class="breadcrumb-item"><a href="/dentists">Dashboard</a></li>
            @endrole
            <li class="breadcrumb-item"><a href="{{ route('backend.inventories.index') }}">All Medicines</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-8 offset-2">
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
