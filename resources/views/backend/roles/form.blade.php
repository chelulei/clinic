
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title*', ['class' => 'control-label']) !!}
    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}

    @if($errors->has('title'))
        <span class="help-block">{{ $errors->first('title') }}</span>
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $role->exists ? 'Update' : 'Save' }}</button>
    <a href="{{ route('backend.roles.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cance</a>

</div>
<!-- /.form-group -->