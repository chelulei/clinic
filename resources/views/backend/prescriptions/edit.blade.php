@extends('layouts.backend.main')

@section('title', 'Clinic | Add new prescription')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.prescriptions.index') }}">All Prescriptions</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Edit prescription</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($prescription, [

                  'method' => 'PUT',
                  'route'  => ['backend.prescriptions.update', $prescription->slug],
                  'files'  => TRUE,
                  'id'     => 'prescription-form'

              ]) !!}

                    @include('backend.prescriptions.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection


