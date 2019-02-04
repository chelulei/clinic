<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>Patient</th>
        <th>Decsription</th>
        <th>Date</th>
        <th>Start Time</th>
        <th>End Time</th>
    </tr>
    </thead>
    <tbody>
    @foreach($appointments as $appointment)

        <tr>
            <td>

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.appointments.destroy', $appointment->id]]) !!}
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.appointments.edit',$appointment->id)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-edit"></i>
                    <!-- /.fa fa-edit -->
                </a>
                <!-- /.btn  btn-default -->
                <button data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?');" type="submit" class="btn btn-sm btn-outline-danger">
                    <i class="fa fa-times"></i>
                </button>

                <!-- /.btn bt-danger -->
                {!! Form::close() !!}
            </td>
            <td>{{$appointment->user->name}}</td>
            <td>{!!$appointment->title!!}</td>
            <td>{{$appointment->date}}</td>
            <td>{{$appointment->start_time}}</td>
            <td>{{$appointment->finish_time}}</td>
            @endforeach
        </tr>
    </tbody>
</table>