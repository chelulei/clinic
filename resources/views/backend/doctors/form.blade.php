
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

        @if($errors->has('name'))
            <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
    </div>
<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
    {!! Form::label('username') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}

    @if($errors->has('username'))
        <span class="help-block">{{ $errors->first('username') }}</span>
    @endif
</div>
    <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
        {!! Form::label('slug') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}

        @if($errors->has('slug'))
            <span class="help-block">{{ $errors->first('slug') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}

        @if($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
        {!! Form::label('password') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}

        @if($errors->has('password'))
            <span class="help-block">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
        {!! Form::label('password_confirmation') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

        @if($errors->has('password_confirmation'))
            <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary btn-lg">{{ $doctor->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.doctors.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cance</a>

    </div>
    <!-- /.form-group -->
