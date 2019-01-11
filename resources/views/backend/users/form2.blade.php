
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
    <select class="form-control m-bot15" name="role">
        <option value="0" @if ($user->role == 0)selected="selected" @endif>Secretary</option>
        <option value="1" @if ($user->role == 1)selected="selected" @endif>Admin</option>
        <option value="2" @if ($user->role == 2)selected="selected" @endif>Doctor</option>
        <option value="3" @if ($user->role == 3)selected="selected" @endif>Dentists</option>
    </select>
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
