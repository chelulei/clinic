<table class="table table-bordered">
    <thead>
    <tr>
        <th>Action</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
    </tr>
    </thead>
    <tbody>
    @foreach($doctors as $doctor)

        <tr>
            <td>

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.doctors.destroy', $doctor->id]]) !!}
                <a href="{{ route('backend.doctors.edit',$doctor->id)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-edit"></i>
                    <!-- /.fa fa-edit -->
                </a>
                <!-- /.btn  btn-default -->
                @if($doctor->id == config('custom.default_doctor_id'))
                    <button onclick="return false" type="submit" class="btn btn-sm btn-danger disabled">
                        <i class="fa fa-times"></i>
                    </button>
                @else
                    <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-sm btn-outline-danger">
                        <i class="fa fa-times"></i>
                    </button>
                @endif

                <!-- /.btn bt-danger -->
                {!! Form::close() !!}
            </td>
            <td>{{$doctor->name}}</td>
            <td>{{$doctor->email}}</td>
            <td>Admin</td>
            @endforeach
        </tr>
    </tbody>
</table>