@extends('layouts.backend.main')

@section('title', 'Clinic | Add new user')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.users.index') }}">All Prescriptions</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
    <div class="col-lg-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <strong>Record Prescriptions</strong>
                <small> Form</small>
            </div>
            <div class="card-body card-block">
                {!! Form::model($user, [
                    'method' => 'POST',
                    'route'  => 'backend.users.store',
                    'files'  => TRUE,
                    'id'     => 'user-form'
                ]) !!}
                @csrf
                @include('backend.users.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
    <br><br>
@endsection
@include('backend.users.script')

