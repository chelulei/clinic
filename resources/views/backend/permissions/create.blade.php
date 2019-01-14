
@extends('layouts.backend.main')

@section('title', 'Clinic | Add new permission')

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
                    <strong>Create permission</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($permission, [
                                        'method' => 'POST',
                                        'route'  => 'backend.permissions.store',
                                        'files'  => TRUE,
                                        'id'     => 'user-form'
                                    ]) !!}
                    @csrf
                    @include('backend.permissions.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection


