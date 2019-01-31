<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>DATE</th>
        <th>Patient Name</th>
        <th>Medicine</th>
        <th>Quantity</th>
    </tr>
    </thead>
    <tbody>
    @foreach($medicines as $medicine)
        <tr>
            <td width="120">

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.medicines.destroy', $medicine->id]]) !!}

                <a data-toggle="tooltip" data-placement="top" title="View Details" href="{{ route('records',$medicine->patient_id)}}" class="btn btn-outline-info btn-sm">
                    <i class="fa fa-search"></i>
                    <!-- /.fa fa-edit -->
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.medicines.edit',$medicine->id)}}" class="btn btn-outline-primary btn-sm">
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
                {{ $medicine->date}}
            </td>
            <td>{{ $medicine->patient->name}}</td>
            <td>{{ $medicine->getMedicineName($medicine->med_id)}}</td>
            <td>{{ $medicine->quantity}}</td>
            @endforeach
        </tr>
    </tbody>
</table>