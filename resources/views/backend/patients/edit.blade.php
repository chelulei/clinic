@extends('layouts.backend.main')

@section('title', 'Clinic | Add new patient')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.patients.index') }}">All Patients</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <strong>Eidt Patient</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($patient, [
                  'method' => 'PUT',
                  'route'  => ['backend.patients.update', $patient->id],
                  'files'  => TRUE,
                  'id'     => 'patient-form'
              ]) !!}

                    @include('backend.patients.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection


