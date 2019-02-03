@csrf
<div class="col-sm-8 offset-2">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
        <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
            {!! Form::label('username') !!}
            {!! Form::text('username', null, ['class' => 'form-control','placeholder' => 'Username','required' => '']) !!}

            @if($errors->has('username'))
                <span class="help-block">{{ $errors->first('username') }}</span>
            @endif
        </div>

    <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
        {{ Form::hidden('slug', null, array('id' => 'slug')) }}
    </div>

        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        </div>
        <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
            {!! Form::label('image') !!}
            <br>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new" style="width: 200px; height: 150px;">
                    <img src="{{ ($user->image_url) ? $user->image_url : 'http://placehold.it/200x150&text=No+Image'}}" alt="">
                </div>
                <br>
                <div class="fileinput-preview fileinput-exists" style="max-width: 200px; max-height: 150px;"></div>
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

    <div class="text-center">
        <button type="submit" class="btn btn-outline-primary btn-lg">{{ $user->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.users.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
    </div>
</div>
