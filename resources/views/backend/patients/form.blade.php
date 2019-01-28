@csrf
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Type</label>
            <select name="type"  class="form-control" id="seeAnotherFieldGroup" required>
                <option value="">--Select Type---</option>
                <option value="student" @if ($patient->type == "student")selected="selected" @endif>Student</option>
                <option value="staff" @if ($patient->type == "staff")selected="selected" @endif>Staff</option>
                <option value="staff" @if ($patient->type == "guest")selected="selected" @endif>Guest</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
            {!! Form::label('idno','ID NO') !!}
            {!! Form::number('idno', null, ['class' => 'form-control','id' => 'otherFieldDiv']) !!}

            @if($errors->has('idno'))
                <span class="help-block">{{ $errors->first('idno') }}</span>
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
        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
<!-- /.col-md-4 -->
    <div class="col-md-2">
        <div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
            {!! Form::label('age') !!}
            {!! Form::number('age', null, ['class' => 'form-control']) !!}

            @if($errors->has('age'))
                <span class="help-block">{{ $errors->first('age') }}</span>
            @endif
        </div>
    </div>
<!-- /.col-md-4 -->
    <div class="col-md-4">
        <div  class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
         <label for="">Sex</label>
        <br>
           <div class="form-check-inline">
               <label class="form-check-label">
                   <input type=radio name="sex" value="Male" {{ $patient->sex == 'Male' ? 'checked' : ''}}>Male</option>
               </label>
           </div>
           <div class="form-check-inline">
               <label class="form-check-label">
                   <input type=radio name="sex" value="Female" {{ $patient->sex == 'Female' ? 'checked' : ''}}>Female</option>
               </label>
           </div>
        @if ($errors->has('sex'))
            <span class="help-block">
           <strong>{{ $errors->first('sex') }}</strong>
           </span>
        @endif
      </div>
     </div>
    <div class="col-md-2">
        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
            {!! Form::label('status') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}

            @if($errors->has('status'))
                <span class="help-block">{{ $errors->first('status') }}</span>
            @endif
        </div>
    </div>
<!-- /.col-md-4 -->
</div>


<!-- /.row -->
<div class="row">
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
            {!! Form::label('address') !!}
            {!! Form::textarea('address', null, ['class' => 'form-control','rows' => 3, 'cols' =>5]) !!}

            @if($errors->has('address'))
                <span class="help-block">{{ $errors->first('address') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('date_birth') ? 'has-error' : '' }}">
            {!! Form::label('date of birth') !!}
            {!! Form::text('date_birth', null, ['class' => 'form-control', 'id' =>'datepicker']) !!}

            @if($errors->has('date_birth'))
                <span class="help-block">{{ $errors->first('date_birth') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-2">
        <div class="form-group {{ $errors->has('weight') ? 'has-error' : '' }}">
            {!! Form::label('weight') !!}
            {!! Form::text('weight', null, ['class' => 'form-control','placeholder'=>'Kg']) !!}

            @if($errors->has('weight'))
                <span class="help-block">{{ $errors->first('weight') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-2">
        <div class="form-group {{ $errors->has('height') ? 'has-error' : '' }}">
            {!! Form::label('height') !!}
            {!! Form::text('height', null, ['class' => 'form-control','placeholder'=>'cm']) !!}

            @if($errors->has('height'))
                <span class="help-block">{{ $errors->first('height') }}</span>
            @endif
        </div>
    </div>
</div>

<div class="form-group" id="otherFieldGroupDiv">
    <div class="row">
        <div class="col-4">
            {!! Form::label('course') !!}
            {!! Form::text('course', null, ['class' => 'form-control','id' => 'otherField1']) !!}
        </div>
        <div class="col-4">
            <label for="exampleInputEmail1">Year Level</label>
            <select name="year"  class="form-control" id="otherField2">
            <option value="">--Select Year---</option>
            <option value="1st" @if ($patient->year == "1st")selected="selected" @endif>1st Year</option>
            <option value="2nd" @if ($patient->year == "2nd")selected="selected" @endif>2nd Year</option>
            <option value="3rd" @if ($patient->year == "3rd")selected="selected" @endif>3rd Year</option>
            <option value="4th" @if ($patient->year == "4th")selected="selected" @endif>4th Year</option>
            <option value="5th" @if ($patient->year == "5th")selected="selected" @endif>5th Year</option>
            </select>
        </div>
        <div class="col-4">
            {!! Form::label('religion') !!}
            {!! Form::text('religion', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group" id="staffFieldGroupDiv">
    <div class="row">
        <div class="col-6">
            {!! Form::label('work') !!}
            {!! Form::text('work', null, ['class' => 'form-control','id' => 'staffField1']) !!}
        </div>
        <div class="col-6">
            {!! Form::label('religion') !!}
            {!! Form::text('religion', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<h5 class="">Person to contact in case of Emergency</h5>
<hr>
<div class="row">

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('name2') ? 'has-error' : '' }}">
            {!! Form::label('name') !!}
            {!! Form::text('name2', null, ['class' => 'form-control']) !!}

            @if($errors->has('name2'))
                <span class="help-block">{{ $errors->first('name2') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('contact') ? 'has-error' : '' }}">
            {!! Form::label('contact') !!}
            {!! Form::text('contact', null, ['class' => 'form-control']) !!}

            @if($errors->has('contact'))
                <span class="help-block">{{ $errors->first('contact') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('address2') ? 'has-error' : ''}}">
            {!! Form::label('address') !!}
            {!! Form::textarea('address2', null, ['class' => 'form-control','rows' => 3, 'cols' =>5]) !!}

            @if($errors->has('address2'))
                <span class="help-block">{{ $errors->first('address2') }}</span>
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
        <div class="form-group {{ $errors->has('allergies') ? 'has-error' : ''}}">
            {!! Form::label('allergies') !!}
            {!! Form::textarea('allergies', null, ['class' => 'form-control','rows' => 2, 'cols' =>5]) !!}

            @if($errors->has('allergies'))
                <span class="help-block">{{ $errors->first('allergies') }}</span>
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
        <div class="form-group {{ $errors->has('medics') ? 'has-error' : ''}}">
            {!! Form::label('medics','Meds Taken') !!}
            {!! Form::textarea('medics', null, ['class' => 'form-control','rows' => 2, 'cols' =>5]) !!}

            @if($errors->has('medics'))
                <span class="help-block">{{ $errors->first('medics') }}</span>
            @endif
        </div>
    </div>
</div>
    <!-- /.col-md-6 -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('illness') ? 'has-error' : '' }}">
                {!! Form::label('Previous Illness') !!}
                {!! Form::text('illness', null, ['class' => 'form-control']) !!}
                @if($errors->has('illness'))
                    <span class="help-block">{{ $errors->first('illness') }}</span>
                @endif
            </div>
        </div>
        <!-- /.co-md-6 -->
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('contact') ? 'has-error' : '' }}">
                {!! Form::label('Previous Hospitalization') !!}
                {!! Form::text('hospital', null, ['class' => 'form-control']) !!}
                @if($errors->has('hospital'))
                    <span class="help-block">{{ $errors->first('hospital') }}</span>
                @endif
            </div>
        </div>
        <!-- /.co-md-6 -->
    </div>
    <!-- /.row -->
<!-- /.row -->
    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary btn-lg">{{ $patient->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.patients.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cance</a>
    </div>
    <!-- /.form-group -->




