@extends('layouts.backend.main')

@section('title', 'Clinic | Edit role')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-lg-right">
                <a href="{{ route('backend.roles.index') }}"><button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-arrow-left"></i>BACK</button></a>
            </div>
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
    <br>
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Edit Role</strong>
                </div>
                <div class="card-body card-block">

                    {{ Form::model($role, ['route' =>['backend.roles.update', $role->id], 'method' => 'PUT']) }}

                    <div class="form-group">
                        {{ Form::label('name', 'Role Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>

                    <h5><b>Assign Permissions</b></h5>
                    @foreach ($permissions as $permission)

                        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

                    @endforeach
                    <br>
                    {{ Form::submit('UPDATE', ['class' => 'btn btn-primary btn-lg']) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    <br><br>

@endsection
