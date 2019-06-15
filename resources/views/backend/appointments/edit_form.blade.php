<div class="row">
<div class="col-md-1"></div>
<div class="col-md-8">
 <div class="form-group row">
         {!! Form::label('patient_id', 'Patient', ['class' => 'col-form-label col-md-2']) !!}
        <div class="col-md-10">
          {!! Form::select('patient_id', App\Patient::pluck('name', 'id'),  old('patient'), ['class' => 'form-control', 'placeholder' => 'Choose patient', 'required'=>'']) !!}
        @if($errors->has('patient_id'))
            <span class="is-invalid">{{ $errors->first('patient_id') }}</span>
        @endif
        </div>
     </div>
   <div class="form-group row ">
         {!! Form::label('date','Date:', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
             <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                    <input type="text" id='date' name="date" class="form-control datetimepicker-input" data-target="#datetimepicker4" value="{{ old('date',$appointment->date) }}" required/>
                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
        </div>
     </div>
      <div class="form-group row">
         {!! Form::label('time','Time:', ["id"=> "", "class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
       <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                    <input type="text" id='time' name="time" class="form-control  datetimepicker-input" data-target="#datetimepicker3" value="{{ old('time',$appointment->time) }}" required/>
                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                    </div>
                </div>
        </div>
     </div>

  <div class="form-group row">
    <label for="" class='col-form-label col-md-2'></label>
    <div class="col-md-10">
            <button type="submit" class="btn btn-outline-primary btn-lg">Save</button>
            <a href="{{ route('backend.appointments.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
        </div>
    </div>

</div>
</div>







