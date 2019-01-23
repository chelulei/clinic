@extends('layouts.backend.main')

@section('title', 'Clinic | Show user')

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
                        <a href="{{ route('backend.users.index') }}"><button class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-arrow-left"></i>BACK</button></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="content mt-3">
        <div class="row">
            <div class="col-sm-12">

                    <div class="card">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bg-primary p-2 mb-2 text-white text-center">
                                        User Details
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-3 col-lg-3 " align="center">
                                <img src="{{ $user->image_url}}" alt="">
                            </div>
                            <!-- /.col-m-3 -->
                            <div class="col-md-4">
                                <br>
                                {!! Form::model($user, [
                                'method' => 'PUT',
                                'files'  => TRUE,
                                'route'  => ['backend.users.update', $user->id],
                                 ]) !!}
                                @csrf
                                {{ Form::hidden('slug', null, array('id' => 'slug')) }}
                                Name: <strong><input class="effect-1"  name="name" type="text" value="{{$user->name}}"></strong><hr>
                                Email: <strong><input class="effect-1" name="email" type="text" value="{{$user->email}}"></strong><hr>
                                Phone: <strong><input class="effect-1" name="phone" type="text" value="{{$user->phone}}"></strong><hr>
                                Address: <strong><input class="effect-1 "name="address" type="text" value="{{$user->address}}"></strong><hr>

                            </div>
                            <div class="col-md-4">
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

            </div> <!-- /.12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.content mt-3 -->
@endsection

