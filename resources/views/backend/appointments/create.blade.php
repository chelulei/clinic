@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | Users index')

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
                        <a href="{{ route('backend.appointments.index') }}"><button class="au-btn au-btn-icon au-btn--blue">
                                <i class="fa fa-arrow-left"></i>BACK</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row m-t-30">
        <div class="col-md-8 offset-2">
            {!! Form::model($appointment, [
                    'method' => 'POST',
                    'route'  => 'backend.appointments.store',

                ]) !!}

            @include('backend.appointments.form')

            {!! Form::close() !!}

        </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
