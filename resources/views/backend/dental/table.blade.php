<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>ID NO</th>
        <th>Name</th>
        <th>Teeth</th>
        <th>Notes</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dentals as $dental)
        <tr>
            <td>

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.dental.destroy', $dental->id]]) !!}
                <a data-toggle="tooltip" data-placement="top" title="View Details" href="{{ route('backend.dental.show',$dental->id)}}" class="btn btn-outline-info btn-sm">
                    <i class="fa fa-search"></i>
                    <!-- /.fa fa-edit -->
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.dental.edit',$dental->id)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-edit"></i>
                    <!-- /.fa fa-edit -->
                </a>

                    <button data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?');" type="submit" class="btn btn-sm btn-outline-danger">
                        <i class="fa fa-times"></i>
                    </button>

                <!-- /.btn bt-danger -->
                {!! Form::close() !!}
            </td>
            <td>888888888888</td>
            <td>{{$dental->patient->name}}</td>
            <td>
                @foreach($dental->patient->teeths as $teeth)
                    <span class="badge badge-primary">{{$teeth->name}}</span><br>
                @endforeach
            </td>
            <td>{{ str_limit($dental->notes, 50)}}</td>
            @endforeach
        </tr>
    </tbody>
</table>