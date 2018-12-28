@extends('layouts.backend.main')

@section('title', 'Clinic | Add new user')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1"></h2>
                <button class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-plus"></i>add user</button>
            </div>
        </div>
    </div>
<div class="row">
    <div class="form">
        <div class="form-control"></div>
        <!-- /.form-control -->
    </div>
    <!-- /.form -->
</div>
<!-- /.row -->
@endsection

{{--@include('backend.categories.script')--}}
