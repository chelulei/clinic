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

                <div class="card card-tabs-3">
                    <div class="card-header">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-7" role="tab">LIST OF USERS</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-8 {{ route('backend.users.create') }}" role="tab">ADD USERS</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-9" role="tab">Tab 9</a></li>
                        </ul>
                    </div>
                    <div class="card-block">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-7">
                                <br>
                                <div class="table-responsive m-b-40">
                                    @include('backend.users.table')
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-8">
                             2
                            </div>
                            <div class="tab-pane" id="tab-9">
                              3
                            </div>
                        </div>

                     @endif

                    </div>

                </div>


@endsection


