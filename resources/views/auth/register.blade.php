@extends('layouts.layout')

@section('content')

<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="/">
                        <img src="/backend/images/icon/logo.png" alt="CoolAdmin">
                    </a>
                </div>
                <div class="login-form">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>{{ __('Name') }}</label>
                            <input id="name" type="text" class="au-input au-input--full{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                            {{ Form::hidden('slug', null, array('id' => 'slug')) }}
                        </div>
                        <div class="form-group">
                            <label>{{ __('UserName') }}</label>
                            <input id="username" type="text" class="au-input au-input--full{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="UserName" required autofocus>

                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>{{ __('Address') }}</label>
                            <input id="address" type="text" class="au-input au-input--full{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Address" required autofocus>

                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>{{ __('Phone') }}</label>
                            <input id="phone" type="text" class="au-input au-input--full{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Phone" required autofocus>

                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="au-input au-input--full{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>{{ __('Password') }}</label>
                            <input id="password" type="password" class="au-input au-input--full{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="au-input au-input--full" name="password_confirmation" placeholder="Confirm Password" required>

                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Register') }}</button>
                    </form>
                    <div class="register-link">
                        <p>
                            Already have account?
                            <a href="{{ route('login') }}">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        $('#username').on('blur', function() {
            var theTitle = this.value.toLowerCase().trim(),
                slugInput = $('#slug'),
                theSlug = theTitle.replace(/&/g, '-and-')
                    .replace(/[^a-z0-9-]+/g, '-')
                    .replace(/\-\-+/g, '-')
                    .replace(/^-+|-+$/g, '');

            slugInput.val(theSlug);
        });
    </script>
@endsection
