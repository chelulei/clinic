@extends('layouts.backend.main')

@section('title', 'Clinic | Edit role')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.roles.index') }}">All roles</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <strong>Edit Role</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($role, [

                  'method' => 'PUT',
                  'route'  => ['backend.roles.update', $role->id],
                  'files'  => TRUE,
                  'id'     => 'role-form'

              ]) !!}

                    @include('backend.roles.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection