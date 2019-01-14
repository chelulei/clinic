@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | Users index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1"> Full Calendar</h2>
            </div>
        </div>
    </div>
    <br>
    <div class="row m-t-30">
        <div class="col-md-12">
            {!! Form::open(array('route' => 'backend.events.store','method'=>'POST')) !!}
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
                        <label for="Title">Title:</label>
                      <input type="text" name="title" id="" class="form-control">
                      <!-- /# -->
                        <!-- /# -->
                    </div>
                </div>
                <input type="hidden" name="user_id" value="{{$user->id}}" >
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <div class="col-xs-12 form-group">
                            {!! Form::label('date', 'Date*', ['class' => 'control-label']) !!}
                            {!! Form::text('date', old('date'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
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
                            {!! Form::text('start_time', old('start_time'), ['class' => 'form-control timepicker', 'placeholder' => '', 'required' => '']) !!}
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
                        {!! Form::text('finish_time', old('finish_time'), ['class' => 'form-control timepicker', 'placeholder' => '']) !!}
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
                        <button type="submit" class="btn btn-lg btn-outline-success">Add Event</button>
                        <a href="{{ url('event') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cance</a>
                    </div>
                </div>
            {!! Form::close() !!}

        </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>
    <script src="{{ asset('/backend/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script>
        $('.timepicker').datetimepicker({
            autoclose: true,
            timeFormat: "HH:mm:ss",
            timeOnly: true
        });
    </script>

@endsection
