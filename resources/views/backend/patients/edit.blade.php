@extends('layouts.backend.main')

@section('title', 'Clinic | Add new patient')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap float-lg-right">
                <a href="{{ route('backend.patients.index') }}"><button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-arrow-left"></i>BACKBACK</button></a>
            </div>
        </div>
    </div>
    <br>
    <div class="row mb-10">
        <div class="col-lg-12 ">
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


