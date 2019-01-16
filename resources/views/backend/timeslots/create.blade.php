
@extends('layouts.backend.main')

@section('title', 'Clinic | Add new slot')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-lg-right">
                <a href="{{ route('backend.slots.index') }}"><button class="au-btn au-btn-icon au-btn--blue">
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
                    <strong>Create New Role</strong>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($slot, [
                                     'method' => 'POST',
                                     'files'  => TRUE,
                                     'route'  => 'backend.slots.store',

                                 ]) !!}

                    @include('backend.timeslots.form')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
    <br><br>

@endsection