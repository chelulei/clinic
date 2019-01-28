<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>ID No</th>
        <th>Type</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($patients as $patient)

        <tr>
            <td>

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.patients.destroy', $patient->id]]) !!}
                <a data-toggle="tooltip" data-placement="top" title="View Details" href="{{ route('backend.patients.show',$patient->id)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-search"></i>
                    <!-- /.fa fa-edit -->
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.patients.edit',$patient->id)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-edit"></i>
                    <!-- /.fa fa-edit -->
                </a>
                    <button data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?');" type="submit" class="btn btn-sm btn-outline-danger">
                        <i class="fa fa-times"></i>
                    </button>

                <!-- /.btn bt-danger -->
                {!! Form::close() !!}
            </td>
            <td>{{$patient->idno}}</td>
            <td>{{$patient->type}}</td>
            <td>{{$patient->name}}</td>
            @endforeach
        </tr>
    </tbody>
</table>