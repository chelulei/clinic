<div class="row">
    <div class="col-sm-6">
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
            <div class="form-group {{ $errors->has('contact') ? 'has-error' : '' }}">
                {!! Form::label('teeth','Teeth*') !!}
                {{ Form::select('teeth[]', $teeth, null, ['id' => 'teeth', 'multiple' => 'multiple']) }}
                @if($errors->has('teeth'))
                    <span class="help-block">{{ $errors->first('teeth') }}</span>
                @endif
            </div>
        <div class="form-group {{ $errors->has('treat') ? 'has-error' : ''}}">
            {!! Form::label('treat','Treatment') !!}
            {!! Form::textarea('treat', null, ['class' => 'form-control','rows' => 5, 'cols' =>5]) !!}
            @if($errors->has('treat'))
                <span class="help-block">{{ $errors->first('treat') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('notes') ? 'has-error' : ''}}">
            {!! Form::label('notes','Notes') !!}
            {!! Form::textarea('notes', null, ['class' => 'form-control','rows' => 5, 'cols' =>5]) !!}

            @if($errors->has('notes'))
                <span class="help-block">{{ $errors->first('notes') }}</span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary btn-lg">{{ $dental->exists ? 'Update' : 'Save' }}</button>
            <a href="{{ route('backend.dental.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
        </div>

    </div>
    <!-- /.col-sm-6 -->
    <div class="col-sm-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tooth Legend</h5>
            </div>
            <img src="{{URL::asset('/backend/images/teeth.png')}}" class="card-img-top" alt="" height="200" width="200">
        </div>

    </div>
    <!-- /.col-sm-6 -->


</div>
<!-- /.row -->
