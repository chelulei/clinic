@extends('layouts.backend.main')

@section('title', 'Clinic | Add new user')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap float-lg-right">
                <a href="{{ route('backend.users.index') }}"><button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-arrow-left"></i>BACK</button></a>
            </div>
        </div>
    </div>
    <br>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row mb-10">
        <div class="col-lg-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <strong>Register User</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($user, [
                       'method' => 'POST',
                       'files'  => TRUE,
                       'route'  => 'backend.users.store',

                   ]) !!}

                    @include('backend.users.form')

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
@include('backend.users.script')


