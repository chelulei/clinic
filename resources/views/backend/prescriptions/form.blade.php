
<div class="form-group">
    {!! Form::label('patient_id', 'Patient', ['class' => 'control-label']) !!}
    {!! Form::select('patient_id',  App\Patient::pluck('name', 'id'),  old('patient'), ['id'=>'select','class' => 'form-control'.($errors->has('name')?" is-invalid":""),'placeholder' => 'Choose patient','required'=>'']) !!}
    @if($errors->has('patient_id'))
        <span class="invalid-feedback">{{ $errors->first('patient_id') }}</span>
    @endif
</div>
<div class="form-group">
{{ Form::hidden('user_id', $user->id) }}
</div>
     <h5 class="text-center">VITAL SIGNS</h5>
      <hr>
     <div class="row">
         <div class="col-sm-3">
             <div class="form-group required">
                 {!! Form::label('bp','BP') !!}
                 {!! Form::text('bp', null, ['class' => 'form-control'.($errors->has('bp')?" is-invalid":"")]) !!}
                 @if($errors->has('bp'))
                     <span class="invalid-feedback">{{ $errors->first('bp') }}</span>
                 @endif
             </div>
         </div>
         <!-- /.col-sm-3 -->
         <div class="col-sm-3">
             <div class="form-group required">
                 {!! Form::label('pr','PR') !!}
                 {!! Form::text('pr', null, ['class' => 'form-control'.($errors->has('pr')?" is-invalid":"")]) !!}
                 @if($errors->has('pr'))
                     <span class="invalid-feedback">{{ $errors->first('pr') }}</span>
                 @endif
             </div>
         </div>
         <!-- /.col-sm-3 -->
         <div class="col-sm-2">
             <div class="form-group required">
                 {!! Form::label('rr','RR') !!}
                 {!! Form::text('rr', null, ['class' => 'form-control'.($errors->has('rr')?" is-invalid":"")]) !!}
                 @if($errors->has('rr'))
                     <span class="invalid-feedback">{{ $errors->first('rr') }}</span>
                 @endif
             </div>
         </div>
         <!-- /.col-sm-3 -->
         <div class="col-sm-2">
             <div class="form-group required">
                 {!! Form::label('temp','TEMP') !!}
                 {!! Form::text('temp', null, ['class' => 'form-control'.($errors->has('temp')?" is-invalid":""),'placeholder' =>'°C']) !!}
                 @if($errors->has('temp'))
                     <span class="invalid-feedback">{{ $errors->first('temp') }}</span>
                 @endif
             </div>
         </div>
         <div class="col-sm-2">
             <div class="form-group required">
                 {!! Form::label('wt','WT') !!}
                 {!! Form::text('wt', null, ['class' => 'form-control'.($errors->has('wt')?" is-invalid":""),'placeholder' =>'Kg']) !!}
                 @if($errors->has('wt'))
                     <span class="invalid-feedback">{{ $errors->first('wt') }}</span>
                 @endif
             </div>
         </div>
     </div>
     <!-- /.row -->
<div class="form-group required">
    {!! Form::label('complaints') !!}
    {!! Form::textarea("complaints",null,["class"=>"form-control".($errors->has('complaints')?" is-invalid":""),'placeholder'=>'complaints','rows' => 3, 'cols' =>5]) !!}
    {!! $errors->first('complaints','<span class="invalid-feedback">:complaints</span>') !!}
</div>
<div class="form-group required">
    {!! Form::label('hpi','HPI/ROS/PE') !!}
    {!! Form::textarea('hpi', null, ['class' => 'form-control'.($errors->has('hpi')?" is-invalid":""),'rows' => 3, 'cols' =>5]) !!}
    @if($errors->has('hpi'))
        <span class="invalid-feedback">{{ $errors->first('hpi') }}</span>
    @endif
</div>
<div class="form-group  required">
    {!! Form::label('examination','Physical Examination') !!}
    {!! Form::textarea('examination', null, ['class' => 'form-control'.($errors->has('examination')?" is-invalid":""),
    'rows' => 3, 'cols' =>5]) !!}
    @if($errors->has('examination'))
        <span class="invalid-feedback">{{ $errors->first('examination') }}</span>
    @endif
</div>
<div class="form-group required">
    {!! Form::label('assessment','Assessment / Primary Immunisation') !!}
    {!! Form::textarea('assessment', null, ['class' => 'form-control'.($errors->has('assessment')?" is-invalid":""),
    'rows' => 3, 'cols' =>5]) !!}
    @if($errors->has('assessment'))
        <span class="invalid-feedback">{{ $errors->first('assessment') }}</span>
    @endif
</div>
<div class="form-group required">
    {!! Form::label('treatment') !!}
    {!! Form::textarea('treatment', null, ['class' => 'form-control'.($errors->has('treatment')?" is-invalid":""),
    'rows' => 3, 'cols' =>5]) !!}
    @if($errors->has('treatment'))
        <span class="invalid-feedback">{{ $errors->first('treatment') }}</span>
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $prescription->exists ? 'Update' : 'Save' }}</button>
    <a href="{{ route('backend.prescriptions.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
</div>
