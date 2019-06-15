
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
                    <input type="text" name="date" class="form-control datetimepicker-input" data-target="#datetimepicker4" value="{{ old('date') }}" required/>
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
                    <input type="text" name="time" class="form-control  datetimepicker-input" data-target="#datetimepicker3" value="{{ old('time') }}" required/>
                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                    </div>
                </div>
        </div>
     </div>








