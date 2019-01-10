
<div class="form-group {{ $errors->has('patient_id') ? 'has-error' : ''}}">
        {!! Form::label('patient_id') !!}
        {!! Form::text('patient_id', null, ['class' => 'form-control']) !!}

        @if($errors->has('patient_id'))
            <span class="help-block">{{ $errors->first('patient_id') }}</span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
        {!! Form::label('date') !!}
        {!! Form::text('date', null, ['class' => 'form-control']) !!}

        @if($errors->has('date'))
            <span class="help-block">{{ $errors->first('date') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        {!! Form::label('description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control','rows' => 5, 'cols' =>5]) !!}

        @if($errors->has('description'))
            <span class="help-block">{{ $errors->first('description') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('treatment') ? 'has-error' : ''}}">
        {!! Form::label('treatment') !!}
        {!! Form::textarea('treatment', null, ['class' => 'form-control','rows' => 5, 'cols' =>5]) !!}

        @if($errors->has('treatment'))
            <span class="help-block">{{ $errors->first('treatment') }}</span>
        @endif
    </div>
<div class="form-group {{ $errors->has('medicine') ? 'has-error' : ''}}">
    {!! Form::label('medicine') !!}
    {!! Form::textarea('medicine', null, ['class' => 'form-control','rows' => 5, 'cols' =>5]) !!}

    @if($errors->has('medicine'))
        <span class="help-block">{{ $errors->first('medicine') }}</span>
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $prescript->exists ? 'Update' : 'Save' }}</button>
    <a href="{{ route('backend.prescriptions.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cance</a>
</div>
