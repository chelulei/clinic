@extends('layouts.backend.main')

@section('title', 'Clinic | Add new doctor')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.doctors.index') }}">All Doctors</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <strong>Eidt doctor</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($doctor, [
                  'method' => 'PUT',
                  'route'  => ['backend.doctors.update', $doctor->id],
                  'files'  => TRUE,
                  'id'     => 'doctor-form'
              ]) !!}

                    @include('backend.doctors.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection


