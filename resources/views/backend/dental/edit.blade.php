@extends('layouts.backend.main')

@section('title', 'Clinic | Add new dental')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.dental.index') }}">All dental Service</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Edit dental Service</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($dental, [

                  'method' => 'PUT',
                  'route'  => ['backend.dental.update', $dental->id],
                  'files'  => TRUE,
                  'id'     => 'dental-form'

              ]) !!}

                    @include('backend.dental.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection


