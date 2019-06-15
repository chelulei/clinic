@extends('layouts.backend.main')

@section('title', 'Clinic | Edit permission')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.permissions.index') }}">All permissions</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <strong>Edit {{$permission->name}}</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {{ Form::model($permission, array('route' => array('backend.permissions.update', $permission->id), 'method' => 'PUT')) }}

                    <div class="form-group">
                        {{ Form::label('name', 'Permission Name') }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                    <br>
                    {{ Form::submit('UPDATE', ['class' => 'btn btn-primary btn-lg']) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
