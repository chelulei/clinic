@extends('layouts.backend.main')
{{--@section('title', 'Cab | Dashboard')--}}
@section('content')
    <div class="card">
        <br>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
        </div>
    </div>

@endsection