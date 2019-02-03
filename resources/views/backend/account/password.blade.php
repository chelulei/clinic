@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | employees index')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            $role('secretary')
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            $endrole
            $role('doctor')
            <li class="breadcrumb-item"><a href="/doctor">Home</a></li>
            $endrole
            $role('dentists')
            <li class="breadcrumb-item"><a href="/dentists">Home</a></li>
            $endrole
        </ol>
    </nav>

    <div class="content mt-3">
        @include('backend_partials.messages')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bg-primary pl-3 p-2 mb-2 text-white">
                                   Change Password
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-9 offset-3">
                                <form class="form-horizontal" method="POST" action="{{ route('profile.update', ['user' => $user]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                        <label for="new-password" class="col-md-4 control-label">Current Password</label>

                                        <div class="col-md-6">
                                            <input id="current-password" type="password" class="form-control" name="current-password" required>

                                            @if ($errors->has('current-password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                        <label for="new-password" class="col-md-4 control-label">New Password</label>

                                        <div class="col-md-6">
                                            <input id="new-password" type="password" class="form-control" name="new-password" required>

                                            @if ($errors->has('new-password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                                        <div class="col-md-6">
                                            <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Change Password
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.div -->

                    </div>
                </div>
            </div>

        </div>
    </div><!-- .content -->
@endsection
