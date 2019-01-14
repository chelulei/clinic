
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
                 {!! Form::text('temp', null, ['class' => 'form-control']) !!}

                 @if($errors->has('temp'))
                     <span class="help-block">{{ $errors->first('temp') }}</span>
                 @endif
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group {{ $errors->has('wt') ? 'has-error' : '' }}">
                 {!! Form::label('wt','WT') !!}
                 {!! Form::text('wt', null, ['class' => 'form-control']) !!}

                 @if($errors->has('wt'))
                     <span class="help-block">{{ $errors->first('wt') }}</span>
                 @endif
             </div>
         </div>
     </div>
     <!-- /.row -->
     <hr>
     <h5 class="text-center">HPI/ROSE/PE</h5>
     <hr>
    <div class="form-group {{ $errors->has('hpi') ? 'has-error' : ''}}">

        {!! Form::textarea('hpi', null, ['class' => 'form-control','rows' => 5, 'cols' =>5]) !!}
        @if($errors->has('hpi'))
            <span class="help-block">{{ $errors->first('hpi') }}</span>
        @endif
    </div>
     <hr>
     <h5 class="text-center">ASSESSMENT</h5>
     <hr>
<div class="form-group {{ $errors->has('assessment') ? 'has-error' : ''}}">
    {!! Form::textarea('assessment', null, ['class' => 'form-control','rows' => 5, 'cols' =>5]) !!}

    @if($errors->has('assess'))
        <span class="help-block">{{ $errors->first('assessment') }}</span>
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $prescription->exists ? 'Update' : 'Save' }}</button>
    <a href="{{ route('backend.prescriptions.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
</div>
