<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>Name</th>
        <th>Teeth</th>
        <th>Treatment</th>
        <th>Assesment</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dentals as $dental)
        <tr>
            <td>

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.dental.destroy', $dental->id]]) !!}
                <a href="{{ route('backend.dental.edit',$dental->id)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-edit"></i>
                    <!-- /.fa fa-edit -->
                </a>

                    <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-sm btn-outline-danger">
                        <i class="fa fa-times"></i>
                    </button>

                <!-- /.btn bt-danger -->
                {!! Form::close() !!}
            </td>
            <td>{{$dental->patient->name}}</td>
            <td>
                {{$dental->patient->pivot->teeth
                }}
            </td>
            <td>{{$dental->treat}}</td>
            <td>{{$dental->notes}}</td>
            @endforeach
        </tr>
    </tbody>
</table>