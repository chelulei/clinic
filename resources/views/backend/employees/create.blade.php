@extends('layouts.backend.main')

@section('title', 'Clinic | Add new employee')

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
                <strong>Register employee</strong>
                <small> Form</small>
            </div>
            <div class="card-body card-block">
                {!! Form::model($employee, [
                    'method' => 'POST',
                    'route'  => 'backend.employees.store',
                    'files'  => TRUE,
                    'id'     => 'employee-form'
                ]) !!}
                @csrf
                @include('backend.employees.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
    <br><br>
@endsection
@include('backend.employees.script')

