@extends('layouts.backend.main')

@section('title', 'Clinic | Add new patient')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.patients.index') }}">All patients</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
    <div class="col-lg-12">
        <div class="card card">
            <div class="card-header">
                <strong>Consultation Form</strong>
            </div>
            <div class="card-body card-block">
                {!! Form::model($patient, [
                    'method' => 'POST',
                    'route'  => 'backend.patients.store',
                    'files'  => TRUE,
                    'id'     => 'id="feedbackform'
                ]) !!}

                @include('backend.patients.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
    <br><br>
@endsection



