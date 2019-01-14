@extends('layouts.backend.main')

@section('title', 'Clinic | Show user')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-lg-right">
                <a href="{{ route('backend.users.index') }}"><button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-arrow-left"></i>BACK</button></a>
            </div>
        </div>
    </div>
    <br>
    <div class="row mb-10">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>User Details</strong>
                </div>
                <div class="card-body card-block">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roles:</strong>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
        </div>
    </div>
    </div>
    </div>
    <br><br>
@endsection