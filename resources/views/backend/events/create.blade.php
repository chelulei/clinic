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
            <form method="post" action="{{url('event/add')}}">
                @csrf
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="Title">Title:</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <strong> Start Date : </strong>
                        <input class="date form-control"  type="text" id="start_date" name="start_date">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <strong> End Date : </strong>
                        <input class="date form-control"  type="text" id="end_date" name="end_date">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-lg btn-outline-success">Add Event</button>
                        <a href="{{ url('event') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cance</a>
                    </div>
                </div>
            </form>

        </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
@section('script')
    <script type="text/javascript">

    </script>
@endsection
