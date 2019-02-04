
<div class="form-group">
    {!! Form::label('patient_id', 'Patient', ['class' => 'control-label']) !!}
    {!! Form::select('patient_id',  App\Patient::pluck('name', 'id'),  old('patient'), ['class' => 'form-control', 'placeholder' => 'Choose patient']) !!}
    @if($errors->has('patient_id'))
        <span class="help-block">{{ $errors->first('patient_id') }}</span>
    @endif
</div>
<div class="form-group">
{{ Form::hidden('user_id', $user->id) }}
</div>
     <h5 class="text-center">VITAL SIGNS</h5>
      <hr>
     <div class="row">
         <div class="col-sm-3">
             <div class="form-group {{ $errors->has('contact') ? 'has-error' : '' }}">
                 {!! Form::label('bp','BP') !!}
                 {!! Form::text('bp', null, ['class' => 'form-control']) !!}

                 @if($errors->has('bp'))
                     <span class="help-block">{{ $errors->first('bp') }}</span>
                 @endif
             </div>
         </div>
         <!-- /.col-sm-3 -->
         <div class="col-sm-3">
             <div class="form-group {{ $errors->has('pr') ? 'has-error' : '' }}">
                 {!! Form::label('pr','PR') !!}
                 {!! Form::text('pr', null, ['class' => 'form-control']) !!}

                 @if($errors->has('pr'))
                     <span class="help-block">{{ $errors->first('pr') }}</span>
                 @endif
             </div>
         </div>
         <!-- /.col-sm-3 -->
         <div class="col-sm-2">
             <div class="form-group {{ $errors->has('rr') ? 'has-error' : '' }}">
                 {!! Form::label('rr','RR') !!}
                 {!! Form::text('rr', null, ['class' => 'form-control']) !!}

                 @if($errors->has('rr'))
                     <span class="help-block">{{ $errors->first('rr') }}</span>
                 @endif
             </div>
         </div>
         <!-- /.col-sm-3 -->
         <div class="col-sm-2">
             <div class="form-group {{ $errors->has('contact') ? 'has-error' : '' }}">
                 {!! Form::label('temp','TEMP') !!}
                 {!! Form::text('temp', null, ['class' => 'form-control','placeholder' =>'°C']) !!}

                 @if($errors->has('temp'))
                     <span class="help-block">{{ $errors->first('temp') }}</span>
                 @endif
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group {{ $errors->has('wt') ? 'has-error' : '' }}">
                 {!! Form::label('wt','WT') !!}
                 {!! Form::text('wt', null, ['class' => 'form-control','placeholder' =>'Kg']) !!}

                 @if($errors->has('wt'))
                     <span class="help-block">{{ $errors->first('wt') }}</span>
                 @endif
             </div>
         </div>
     </div>
     <!-- /.row -->
<div class="form-group {{ $errors->has('complaints') ? 'has-error' : ''}}">
    {!! Form::label('complaints') !!}
    {!! Form::textarea('complaints', null, ['class' => 'form-control']) !!}
    @if($errors->has('complaints'))
        <span class="help-block">{{ $errors->first('complaints') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('hpi') ? 'has-error' : ''}}">
    {!! Form::label('hpi','HPI/ROS/PE') !!}
    {!! Form::textarea('hpi', null, ['class' => 'form-control']) !!}

    @if($errors->has('hpi'))
        <span class="help-block">{{ $errors->first('hpi') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('examination') ? 'has-error' : ''}}">
    {!! Form::label('examination','Physical Examination') !!}
    {!! Form::textarea('examination', null, ['class' => 'form-control']) !!}

    @if($errors->has('examination'))
        <span class="help-block">{{ $errors->first('examination') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('assessment') ? 'has-error' : ''}}">
    {!! Form::label('assessment','Assessment / Primary Immunisation') !!}
    {!! Form::textarea('assessment', null, ['class' => 'form-control']) !!}

    @if($errors->has('assessment'))
        <span class="help-block">{{ $errors->first('assessment') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('treatment') ? 'has-error' : ''}}">
    {!! Form::label('treatment') !!}
    {!! Form::textarea('treatment', null, ['class' => 'form-control']) !!}

    @if($errors->has('treatment'))
        <span class="help-block">{{ $errors->first('treatment') }}</span>
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $prescription->exists ? 'Update' : 'Save' }}</button>
    <a href="{{ route('backend.prescriptions.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
</div>
