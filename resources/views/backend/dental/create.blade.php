@extends('layouts.backend.main')

@section('title', 'Clinic | Add new Assessments')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.dental.index') }}">All dental Services</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
    <div class="col-lg-8 offset-2">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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


