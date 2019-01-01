@extends('layouts.backend.main')

@section('title', 'Norsu Clinic | Users index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1"> Full Calendar</h2>
                <a href="{{ route('backend.users.create') }}"><button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-plus"></i>add Event</button></a>
            </div>
        </div>
    </div>
    <br>
    <div class="row m-t-30">
        <div class="col-md-12">
            {!! Form::open(array('route' => 'backend.events.store','method'=>'POST','files'=>'true')) !!}
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @elseif (Session::has('warnning'))
                        <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                    @endif

                </div>

                <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        {!! Form::label('title','Event Name:') !!}
                        <div class="">
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('title', '<p class="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                        {!! Form::label('start_date','Start Date:') !!}
                        <div class="">
                            {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                        {!! Form::label('end_date','End Date:') !!}
                        <div class="">
                            {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                    {!! Form::submit('Add Event',['class'=>'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}

        </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
@section('script')
    <script type="text/javascript">

    </script>
@endsection
