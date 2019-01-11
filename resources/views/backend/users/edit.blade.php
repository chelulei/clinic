@extends('layouts.backend.main')

@section('title', 'Clinic | Edit user')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.users.index') }}">All Users</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <strong>Edit User</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($user, [

                  'method' => 'PUT',
                  'route'  => ['backend.users.update', $user->id],
                  'files'  => TRUE,
                  'id'     => 'user-form'

              ]) !!}

                    @include('backend.users.form2')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection


