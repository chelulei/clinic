<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>DATE</th>
        <th>ID NO</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($prescriptions as $prescription)
        <tr>
            <td width="120">

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.prescriptions.destroy', $prescription->id]]) !!}

                <a data-toggle="tooltip" data-placement="top" title="View Details" href="{{ route('records',$prescription->patient_id)}}" class="btn btn-outline-info btn-sm">
                    <i class="fa fa-search"></i>
                    <!-- /.fa fa-edit -->
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.prescriptions.edit',$prescription->id)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-edit"></i>
                    <!-- /.fa fa-edit -->
                </a>

                    <button data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?');" type="submit" class="btn btn-sm btn-outline-danger">
                        <i class="fa fa-times"></i>
                    </button>

                <!-- /.btn bt-danger -->
                {!! Form::close() !!}
            </td>
            <td>
                <a data-toggle="tooltip" data-placement="top" title="View Details" href="{{ route('backend.prescriptions.show',$prescription->id)}}">
                {{ $prescription->date}}
                </a>
            </td>
            <td>{{ $prescription->patient->idno}}</td>
            <td>{{ $prescription->patient->name}}</td>
            @endforeach
        </tr>
    </tbody>
</table>