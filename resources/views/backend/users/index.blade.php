@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | Users index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">User Management</h2>
                <a href="{{ route('backend.users.create') }}"><button class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-plus"></i>add user</button></a>
            </div>
        </div>
    </div>
    <br>
    @include('backend_partials.messages')
            @if(! $users->count())
                <div class="alert alert-danger m-2">
                    No Records
                </div>
                <!-- /.alert alert-danger -->
    @else

                <div class="card text-center">
                    <div class="card-header bg-primary">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">LIST OF USERS</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">

          <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                @include('backend.users.table')
            </div>
        @endif
           </div>
         </div>


                    </div>
                </div>


@endsection


