@csrf

<div class="form-group">
    {!! Form::label('patient_id', 'Patient', ['class' => 'control-label']) !!}
    {!! Form::select('patient_id',  App\Patient::pluck('name', 'id'),  old('patient'), ['class' => 'form-control', 'placeholder' => 'Choose patient']) !!}
    @if($errors->has('patient_id'))
        <span class="help-block">{{ $errors->first('patient_id') }}</span>
    @endif
</div>

<div class="form-group {{ $errors->has('med_id') ? 'has-error' : '' }}">
    {!! Form::label('med_id','Medicine*') !!}
    {{ Form::select('med_id',  $medicines,['id' => 'medicine']) }}
    @if($errors->has('med_id'))
        <span class="help-block">{{ $errors->first('med_id') }}</span>
    @endif
</div>

<div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
    {!! Form::label('quantity') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control','placeholder'=>'']) !!}

    @if($errors->has('quantity'))
        <span class="help-block">{{ $errors->first('quantity') }}</span>
    @endif
</div>

<!-- /.col-md-4 -->
<!-- /.row -->
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">SAVE</button>
    <a href="{{ route('backend.inventories.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cance</a>
</div>
<!-- /.form-group -->
