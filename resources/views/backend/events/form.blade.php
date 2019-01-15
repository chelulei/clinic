@csrf
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        {!! Form::label('patient_id', 'Patient', ['class' => 'control-label']) !!}
        {!! Form::select('patient_id',  App\Patient::pluck('name', 'id'),  old('patient'), ['class' => 'form-control', 'placeholder' => 'Choose patient']) !!}
        @if($errors->has('patient_id'))
            <span class="help-block">{{ $errors->first('patient_id') }}</span>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            {!! Form::label('title') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}

            @if($errors->has('title'))
                <span class="help-block">{{ $errors->first('title') }}</span>
            @endif
        </div>
    </div>
</div>
<input type="hidden" name="user_id" value="{{$user->id}}" >
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <div class="col-xs-12 form-group">
            {!! Form::label('date', 'Date*', ['class' => 'control-label']) !!}
            {!! Form::text('date', old('date'), ['class' => 'form-control', 'id' => 'datepicker','placeholder' => '', 'required' => '']) !!}
            <p class="help-block"></p>
            @if($errors->has('date'))
                <p class="help-block">
                    {{ $errors->first('date') }}
                </p>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <div class="col-xs-12 form-group">
            {!! Form::label('start_time', 'Start time*', ['class' => 'control-label']) !!}
            {!! Form::text('start_time', old('start_time'), ['class' => 'form-control',  'id' => 'timepicker', 'placeholder' => '', 'required' => '']) !!}
            <p class="help-block"></p>
            @if($errors->has('start_time'))
                <p class="help-block">
                    {{ $errors->first('start_time') }}
                </p>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <div class="col-xs-12 form-group">
            {!! Form::label('finish_time', 'Finish time', ['class' => 'control-label']) !!}
            {!! Form::text('finish_time', old('finish_time'), ['class' => 'form-control',  'id' => 'timepicker2', 'placeholder' => '']) !!}
            <p class="help-block"></p>
            @if($errors->has('finish_time'))
                <p class="help-block">
                    {{ $errors->first('finish_time') }}
                </p>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
            <button type="submit" class="btn btn-outline-primary btn-lg">{{ $event->exists ? 'Update' : 'Save' }}</button>
            <a href="{{ route('backend.events.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>

    </div>
</div>