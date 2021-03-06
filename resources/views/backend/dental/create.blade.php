@extends('layouts.backend.main')

@section('title', 'Clinic | Add new service')

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
                </h1>
            </div>
        </div>
        <div class="float-right pr-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{route('backend.dental.index')}}"><button class="au-btn au-btn-icon au-btn--blue">
                                <i class="fa fa-arrow-left"></i>ALL DENTAL SERVICES</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mb-10">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Add Service</strong>
            </div>
            <div class="card-body card-block">
                {!! Form::model($dental, [
                    'method' => 'POST',
                    'route'  => 'backend.dental.store',
                    'files'  => TRUE,
                    'id'     => 'user-form'
                ]) !!}
                @csrf
                @include('backend.dental.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
    <br><br>
@endsection


