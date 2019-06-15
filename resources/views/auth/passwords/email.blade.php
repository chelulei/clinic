@extends('layouts.layout')
@section('content')
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('/backend/images/icon/logo.png') }}" alt="Norsu">
                    </a>
                </div>
                <div class="login-form">
                      @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                        <strong>{{ $error }}</strong>
                        @endforeach
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <form method="POST" action="{{ route('password.email') }}">
                         @csrf
                                <div class="form-group">
                                    <label>{{ __('E-Mail Address') }}</label>
                                    <input class="au-input au-input--full {{ $errors->has('email') ? ' is-invalid' : '' }}"" type="email" name="email" placeholder="Email"
                                    value="{{ old('email') }}" required>
                                     @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">
                                       {{ __('Send Password Reset Link') }}
                                </button>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
