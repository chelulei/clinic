@extends('layouts.backend.main')

@section('title', 'Clinic | Edit time slot')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.slots.index') }}">All Time slots</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <strong>Eidt Patient</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($slot, [
                  'method' => 'PUT',
                  'route'  => ['backend.slots.update', $slot->id],
                  'files'  => TRUE,
                  'id'     => 'patient-form'
              ]) !!}

                    @include('backend.timeslots.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
