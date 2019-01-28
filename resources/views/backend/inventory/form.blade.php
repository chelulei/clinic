@csrf
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            {!! Form::label('title','Title') !!}
            {!! Form::textarea('title', null, ['class' => 'form-control','form-control','rows' => 2, 'cols' =>5]) !!}

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
            {!! Form::label('start_date', 'Start Date*', ['class' => 'control-label']) !!}
            {!! Form::text('start_date', old('start_date'), ['class' => 'form-control', 'id' => 'datepick','placeholder' => '', 'required' => '']) !!}
            <p class="help-block"></p>
            @if($errors->has('start_date'))
                <p class="help-block">
                    {{ $errors->first('start_date') }}
                </p>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <div class="col-xs-12 form-group">
            {!! Form::label('end_date', 'End Date*', ['class' => 'control-label']) !!}
            {!! Form::text('end_date', old('end_date'), ['class' => 'form-control', 'id' => 'datepicker','placeholder' => '', 'required' => '']) !!}
            <p class="help-block"></p>
            @if($errors->has('end_date'))
                <p class="help-block">
                    {{ $errors->first('start_date') }}
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