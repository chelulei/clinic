@extends('layouts.backend.main')

@section('title', 'Clinic | index inventories')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('backend.inventories.index') }}">All inventories</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Edit Item</strong>
                    <small> Form</small>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($inventory, [

                  'method' => 'PUT',
                  'route'  => ['backend.inventories.update', $inventory->id],
                  'files'  => TRUE,
                  'id'     => 'inventory-form'

              ]) !!}

                    @include('backend.inventory.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection


