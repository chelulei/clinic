@extends('layouts.backend.main')

@section('title', 'Clinic | Edit service')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.services.index') }}">All services</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <strong>Edit service</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($service, [

                  'method' => 'PUT',
                  'route'  => ['backend.services.update', $service->id],
                  'files'  => TRUE,
                  'id'     => 'service-form'

              ]) !!}

                    @include('backend.services.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection