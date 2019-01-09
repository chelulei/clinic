<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>Name</th>
        <th>course</th>
        <th>Age</th>
    </tr>
    </thead>
    <tbody>
    @foreach($patients as $patient)

        <tr>
            <td>

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.patients.destroy', $patient->id]]) !!}
                <a href="{{ route('backend.patients.edit',$patient->id)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-edit"></i>
                    <!-- /.fa fa-edit -->
                </a>
                <!-- /.btn  btn-default -->

                    <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-sm btn-outline-danger">
                        <i class="fa fa-times"></i>
                    </button>

                <!-- /.btn bt-danger -->
                {!! Form::close() !!}
            </td>
            <td>{{$patient->name}}</td>
            <td>{{$patient->course}}</td>
            <td>{{$patient->age}}</td>
            @endforeach
        </tr>
    </tbody>
</table>