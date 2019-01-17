
@extends('layouts.backend.main')

@section('title', 'Clinic | Add new permission')

@section('content')
    <div class="breadcrumbs">
        <div class="page-header float-left pl-2">
            <div class="page-title">
                <h1 class="bread-head"> <i class="fas fa-tachometer-alt"></i> Dashboard</h1>
            </div>
        </div>
        <div class="float-right pr-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('backend.permissions.index') }}"><button class="au-btn au-btn-icon au-btn--blue">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>BACK</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mb-10">
        <div class="col-lg-12">
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


