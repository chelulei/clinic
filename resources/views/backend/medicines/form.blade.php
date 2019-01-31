@csrf
{{ Form::hidden('user_id', $user->id) }}
<div class="form-group">
    {!! Form::label('patient_id', 'Patient', ['class' => 'control-label']) !!}
    {!! Form::select('patient_id',  App\Patient::pluck('name', 'id'),  old('patient'), ['class' => 'form-control', 'placeholder' => 'Choose patient']) !!}
    @if($errors->has('patient_id'))
        <span class="help-block">{{ $errors->first('patient_id') }}</span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('med_id', 'Patient', ['class' => 'control-label']) !!}
    {!! Form::select('med_id',  App\Inventory::pluck('name', 'id'),  old('medicine'), ['class' => 'form-control', 'placeholder' => 'Choose medicine']) !!}
    @if($errors->has('med_id'))
        <span class="help-block">{{ $errors->first('med_id') }}</span>
    @endif
</div>
<div class="form-group">

    {!! Form::label('quantity') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control','placeholder'=>'']) !!}

    @if($errors->has('quantity'))
        <span class="help-block">{{ $errors->first('quantity') }}</span>
    @endif
</div>

<!-- /.col-md-4 -->
<!-- /.row -->
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $medicine->exists ? 'Update' : 'Save' }}</button>
    <a href="{{url()->previous()}}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
</div>
<!-- /.form-group -->
