@extends('layouts.backend.main')

@section('title', 'Clinic | Edit employee')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.employees.index') }}">All employees</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <strong>Edit employee</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($employee, [

                  'method' => 'PUT',
                  'route'  => ['backend.employees.update', $employee->id],
                  'files'  => TRUE,
                  'id'     => 'employee-form'

              ]) !!}

                    @include('backend.employees.form2')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection


