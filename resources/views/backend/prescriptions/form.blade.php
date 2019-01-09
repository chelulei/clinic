
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
<div class="form-group">
    {!! Form::label('role') !!}
    {{ Form::select ('role', ['0' => 'Secretary', '1' => 'Admin','2' => 'doctor','3' => 'dentist', ], 0 , ['class' => 'form-control', 'id' =>'role']) }}
</div>
    <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
        {{ Form::hidden('slug', null, array('id' => 'slug')) }}
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

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    {!! Form::label('image') !!}
    <br>
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                <img src="{{ ($user->image_url) ? $user->image_url : ' '}}" alt="">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
            <div>
                <span class="btn btn-outline-default btn-file btn-outline-success">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                   {!! Form::file('image') !!}
                </span>
                <a href="#" class="btn btn-default fileinput-exists btn-outline-danger" data-dismiss="fileinput">Remove</a>
            </div>
        </div>
    @if($errors->has('image'))
        <span class="help-block">{{ $errors->first('image') }}</span>
    @endif
</div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary btn-lg">{{ $user->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.users.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cance</a>

    </div>
    <!-- /.form-group -->
