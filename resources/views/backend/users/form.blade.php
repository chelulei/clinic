@csrf
  <div class="col-sm-8 offset-2">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : ' ' }}"  required>
         @if($errors->has('name'))
                <div class="invalid-feedback">
                   <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
      </div>
        <div class="form-group">
            <strong>Email:</strong>
          <input type="email" name="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : ' ' }}"  required>
        @if($errors->has('email'))
                <div class="invalid-feedback">
                   <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif
        </div>
    <div class="form-group">
        {!! Form::label('username') !!}
        <input id="username" type="text" name="username" value="{{ old('username') }}" class="form-control {{ $errors->has('username') ? 'is-invalid' : ' ' }}"  required>
            @if($errors->has('username'))
                <div class="invalid-feedback">
                   <strong>{{ $errors->first('username') }}</strong>
                </div>
            @endif
    </div>
    <div class="form-group">
        {{ Form::hidden('slug', null, ['id' => 'slug']) }}
    </div>

        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,[], ['class' => 'form-control','multiple','require'=>'']) !!}
        </div>
    <div class="form-group">
        {!! Form::label('image') !!}
        <br>
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new" style="width: 200px; height: 150px;">
                <img src="{{($user->image_url) ? $user->image_url : asset('img/noimage.png')}}" alt="">
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
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary btn-lg">{{ $user->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.users.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
    </div>
</div>
<!-- /.col-sm-8 -->
