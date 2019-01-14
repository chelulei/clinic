@extends('layouts.backend.main')

@section('title', 'Clinic | Show role')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-lg-right">
                <a href="{{ route('backend.roles.index') }}"><button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-arrow-left"></i>BACK</button></a>
            </div>
        </div>
    </div>
    <br>
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Role Details</strong>
                </div>
                <div class="card-body card-block">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $role->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permissions:</strong>
                <br>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="label label-success">{{ $v->name }},</label>
                        <br>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
        </div>
    </div>
    </div>
    <br><br>
@endsection