
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('name') !!}
        {!! Form::text('name', null, ['class' => 'form-control','required' => '']) !!}

        @if($errors->has('name'))
            <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
    </div>
<div class="form-group">
    {!! Form::label('service') !!}
    {!! Form::text('service', null,  ['class' => 'form-control']) !!}
    @if($errors->has('service'))
        <span class="help-block">{{ $errors->first('service_id') }}</span>
    @endif
</div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class' => 'form-control','required' => '']) !!}

        @if($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span>
        @endif
    </div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    {!! Form::label('image') !!}
    <br>
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                <img src="{{ ($employee->image_url) ? $employee->image_url : ' '}}" alt="">
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
  <p class="text-center">
      <button type="submit" class="btn btn-outline-primary btn-lg">{{ $employee->exists ? 'Update' : 'Save' }}</button>
      <a href="{{ route('backend.employees.index') }}" class="btn btn-outline-danger btn-lg" service="button" aria-pressed="true">Cancel</a>

  </p>

<!-- /.form-group -->
