@csrf

<div class="form-group">
    {{ Form::hidden('user_id', $user->id) }}
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Type</label>
            <select name="type"  class="form-control" id="seeAnotherFieldGroup" required>
                <option value="">--Select Type---</option>
                <option value="student" {{ old('type',$patient->type ) == 'student' ? 'selected' : '' }}>Student</option>
                <option value="staff" {{ old('type',$patient->type ) == 'staff' ? 'selected' : '' }}>Staff</option>
                <option value="guest"  {{ old('type',$patient->type ) == 'guest' ? 'selected' : '' }}>Guest</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">

            {!! Form::label('idno','ID NO') !!}
            <input  type="number" name="idno" value="{{ old('idno',$patient->idno) }}" class="form-control {{ $errors->has('idno') ? 'is-invalid' : ' ' }}"  required>

                @if($errors->has('idno'))
                        <div class="invalid-feedback">
                        <strong>{{ $errors->first('idno') }}</strong>
                        </div>
                    @endif
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for=""><br></label>
          <input type="text" name="" id="" class="form-control" disabled>
          <!-- /# -->
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('name') !!}
            <input  type="text" name="name" value="{{ old('name',$patient->name) }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : ' ' }}"  required>
                  @if($errors->has('name'))
                        <div class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                        </div>
                    @endif
        </div>
    </div>
<!-- /.col-md-4 -->
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('age') !!}
             <input  type="number" name="age" value="{{ old('age',$patient->age) }}" class="form-control {{ $errors->has('age') ? 'is-invalid' : ' ' }}"  required>
                @if($errors->has('age'))
                <div class="invalid-feedback">
                <strong>{{ $errors->first('age') }}</strong>
                </div>
            @endif
        </div>
    </div>
<!-- /.col-md-4 -->
    <div class="col-md-4">
        <div  class="form-group">
         <label for="">Sex</label>
        <br>
           <div class="form-check-inline">
               <label class="form-check-label">
                 <input type="radio" name="sex" value="Male" {{ (old('sex',$patient->sex) == 'Male') ? 'checked' : '' }}>Male</option>
               </label>
           </div>
           <div class="form-check-inline">
               <label class="form-check-label">
                      <input type="radio" name="sex" value="Female" {{ (old('sex',$patient->sex) == 'Female') ? 'checked' : '' }}>Female</option>
               </label>
           </div>
       @if($errors->has('sex'))
                <div class="invalid-feedback">
                <strong>{{ $errors->first('sex') }}</strong>
                </div>
            @endif
      </div>
     </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('status') !!}
           <input id="status" type="text" name="status" value="{{ old('status',$patient->status) }}" class="form-control {{ $errors->has('status') ? 'is-invalid' : ' ' }}"  required>

        @if($errors->has('status'))
                <div class="invalid-feedback">
                <strong>{{ $errors->first('status') }}</strong>
                </div>
            @endif
        </div>
    </div>
<!-- /.col-md-4 -->
</div>


<!-- /.row -->
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('address') !!}
           <input id="address" type="text" name="address" value="{{ old('address',$patient->address) }}" class="form-control {{ $errors->has('address') ? 'is-invalid' : ' ' }}"  required>

    @if($errors->has('address'))
            <div class="invalid-feedback">
            <strong>{{ $errors->first('address') }}</strong>
            </div>
        @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('date of birth') !!}
           <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                    <input type="text" value="{{ old('date_birth',$patient->date_birth) }}" name="date_birth"  class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
          @if($errors->has('date_birth'))
                <div class="invalid-feedback">
                <strong>{{ $errors->first('date_birth') }}</strong>
                </div>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('weight') !!}
            <input id="weight" type="text" name="weight" value="{{ old('weight',$patient->weight) }}" class="form-control {{ $errors->has('weight') ? 'is-invalid' : ' ' }}"  placeholder="kg">

   @if($errors->has('weight'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('weight') }}</strong>
		</div>
	@endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('height') !!}
         <input id="height" type="text" name="height" value="{{ old('height',$patient->height) }}" class="form-control {{ $errors->has('height') ? 'is-invalid' : ' ' }}" placeholder="cm">

   @if($errors->has('height'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('height') }}</strong>
		</div>
	@endif
        </div>
    </div>
</div>
{{-- students --}}
<div class="form-group" id="otherFieldGroupDiv">
    <div class="row">
    <div class="col-4">
                {!! Form::label('course') !!}
                    <input id="otherField1" type="text" name="course" value="{{ old('course',$patient->course) }}" class="form-control {{ $errors->has('course') ? 'is-invalid' : ' ' }}" required>
                @if($errors->has('course'))
                        <div class="invalid-feedback">
                        <strong>{{ $errors->first('course') }}</strong>
                        </div>
                    @endif
            </div>
            <div class="col-4">
                <label for="exampleInputEmail1">Year Level</label>
                <select name="year"  class="form-control" id="otherField2">
                <option value="">--Select Year---</option>
                <option value="1st"  {{ old('year', $patient->year) == '1st' ? 'selected' : '' }}>1st Year</option>
                <option value="2nd" {{ old('year', $patient->year) == '2nd' ? 'selected' : '' }}>2nd Year</option>
                <option value="3rd" {{ old('year', $patient->year) == '3rd' ? 'selected' : '' }}>3rd Year</option>
                <option value="4th" {{ old('year', $patient->year) == '4th' ? 'selected' : '' }}>4th Year</option>
                <option value="5th" {{ old('year', $patient->year) == '5th' ? 'selected' : '' }}>5th Year</option>
                </select>
            </div>

        <div class="col-4">
             <div class="form-group">
            {!! Form::label('religion') !!}
             <input id="otherField3"  type="text" name="religion" value="{{ old('religion',$patient->religion) }}" class="form-control {{ $errors->has('religion') ? 'is-invalid' : ' ' }}"  >
                @if($errors->has('religion'))
                <div class="invalid-feedback">
                <strong>{{ $errors->first('religion') }}</strong>
                </div>
            @endif
        </div>
        </div>
    </div>
</div>
<div class="form-group" id="staffFieldGroupDiv">
    <div class="row">
        <div class="col-6">
               <div class="form-group">
            {!! Form::label('work') !!}
             <input id="staffField1"  type="text" name="work" value="{{ old('work',$patient->work) }}" class="form-control {{ $errors->has('work') ? 'is-invalid' : ' ' }}">
                @if($errors->has('work'))
                <div class="invalid-feedback">
                <strong>{{ $errors->first('work') }}</strong>
                </div>
            @endif
        </div>
        </div>
        <div class="col-6">
            <div class="form-group">
            {!! Form::label('religion') !!}
             <input id="staffField2"  type="text" name="religion" value="{{ old('religion',$patient->religion) }}" class="form-control {{ $errors->has('religion') ? 'is-invalid' : ' ' }}"  >
                @if($errors->has('religion'))
                <div class="invalid-feedback">
                <strong>{{ $errors->first('religion') }}</strong>
                </div>
            @endif
        </div>
        </div>
    </div>
</div>
<h5 class="">Person to contact in case of Emergency</h5>
<hr>
<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('name') !!}
            <input id="name2" type="text" name="name2" value="{{ old('name2',$patient->name2) }}" class="form-control {{ $errors->has('name2') ? 'is-invalid' : ' ' }}"  required>

   @if($errors->has('name2'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('name2') }}</strong>
		</div>
	@endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('contact') !!}
           <input id="contact" type="number" name="contact" value="{{ old('contact',$patient->contact) }}" class="form-control
           {{ $errors->has('contact') ? 'is-invalid' : ' ' }}"  required>
          @if($errors->has('contact'))
            <div class="invalid-feedback">
               <strong>{{ $errors->first('contact') }}</strong>
            </div>
        @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('address') !!}
           <input id="address2" type="text" name="address2" value="{{ old('address2',$patient->address2) }}" class="form-control {{ $errors->has('address2') ? 'is-invalid' : ' ' }}"  required>
   @if($errors->has('address2'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('address2') }}</strong>
		</div>
	@endif
        </div>
    </div>
    <!-- /.col-md-4 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-6">
        <h5> Family and Past Medical History</h5>
        <hr>
     @foreach($histories as $history)
        <label class="checkbox-inline "for="histo[{{ $history->id }}]">
            <input id="histo[{{ $history->id }}]" name="histo[{{ $history->id }}]" type="checkbox" value="{{ $history->id }}"
                    {{$patient->histories->find($history->id) ? 'checked' : '' }}
            > {{ $history->name }}
        </label>
        <br>
      @endforeach
        <div class="form-group">
            {!! Form::label('allergies') !!}
           <input  type="text" name="allergies" value="{{ old('allergies',$patient->allergies) }}" class="form-control {{ $errors->has('allergies') ? 'is-invalid' : ' ' }}">

            @if($errors->has('allergies'))
                <span class="invalid-feedback">{{ $errors->first('allergies') }}</span>
            @endif
        </div>
        <!-- /# -->
    </div>
    <!-- /.col-md-6 -->
    <div class="col-md-6">
        <h5> Immunizations</h5>
        <hr>
         @foreach($immunizations as $immune)
        <label class="checkbox-inline "for="immun[{{ $immune->id }}]">
            <input id="immun[{{ $immune->id }}]" name="immun[{{ $immune->id }}]" type="checkbox" value="{{ $immune->id }}"
                    {{$patient->immunizations->find($immune->id) ? 'checked' : '' }}
            > {{ $immune->name }}
        </label>
        <br>

      @endforeach
        <div class="form-group">
            {!! Form::label('medics','Meds Taken') !!}
           <input  type="text" name="medics" value="{{ old('medics',$patient->medics) }}" class="form-control {{ $errors->has('medics') ? 'is-invalid' : ' ' }}">
            @if($errors->has('medics'))
                <span class="invalid-feedback">{{ $errors->first('medics') }}</span>
            @endif
        </div>
    </div>
</div>
    <!-- /.col-md-6 -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('Previous Illness') !!}
              <input  type="text" name="illness" value="{{ old('illness',$patient->illness) }}" class="form-control {{ $errors->has('illness') ? 'is-invalid' : ' ' }}">
                @if($errors->has('illness'))
                    <span class="invalid-feedback">{{ $errors->first('illness') }}</span>
                @endif
            </div>
        </div>
        <!-- /.co-md-6 -->
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('Previous Hospitalization') !!}
               <input  type="text" name="hospital" value="{{ old('hospital',$patient->hospital) }}" class="form-control {{ $errors->has('hospital') ? 'is-invalid' : ' ' }}">
                @if($errors->has('hospital'))
                    <span class="invalid-feedback">{{ $errors->first('hospital') }}</span>
                @endif

            </div>
        </div>
        <!-- /.co-md-6 -->
    </div>
    <!-- /.row -->
<!-- /.row -->
    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary btn-lg">{{ $patient->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.patients.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
    </div>
    <!-- /.form-group -->




