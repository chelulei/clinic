
@extends('layouts.backend.main')

@section('title', 'Clinic | Add new role')

@section('content')
    <div class="breadcrumbs">
        <div class="page-header float-left pl-2">
            <div class="page-title">
                <h1 class="bread-head">
                    @role('secretary')
                    <a href="{{route('home')}}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    @endrole
                    @role('doctor')
                    <a href="{{route('doctor')}}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    @endrole
                    @role('dentists')
                    <a href="{{route('dentists')}}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    @endrole
                </h1>
            </div>
        </div>
        <div class="float-right pr-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('backend.roles.index') }}"><button class="au-btn au-btn-icon au-btn--blue">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>ALL ROLES</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Create New Role</strong>
                </div>
                <div class="card-body card-block">
        {!! Form::open(array('route' => 'backend.roles.store','method'=>'POST')) !!}
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>
                    <h5><b>Assign Permissions</b></h5>
                    <br>
            <div class='form-group'>
                @foreach ($permissions as $permission)
                    {{ Form::checkbox('permissions[]',  $permission->id ) }}
                    {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                @endforeach
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-outline-primary btn-lg">save</button>
                    <a href="{{ route('backend.roles.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cance</a>
                </div>
                <br>
    {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
    <br><br>

@endsection