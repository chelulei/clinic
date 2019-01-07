@extends('layouts.backend.main')
@section('title', 'Clinic | Errors')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
        </ol>
    </nav>
    <div class="row mb-10">
    <div class="col-lg-8 offset-md-2">
       <div class="container text-center">
	<h1>You don't have permission for access this page <br/> Please contact you Superadmin!</h1>
</div>
    </div>
    </div>
    <br><br>
@endsection