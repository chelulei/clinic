<table class="table table-bordered">
    <thead>
    <tr>
        <th>Action</th>
        <th>Image</th>
        <th>Name</th>
        <th>patientname</th>
        <th>Email</th>
        <th>Role</th>
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
                @if($patient->id == config('custom.default_patient_id'))
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
            <td><img src="{{ $patient->image_url}} " alt="" width="100" height="100"></td>
            <td>{{$patient->name}}</td>
            <td>{{$patient->username}}</td>
            <td>{{$patient->email}}</td>
            <td>Admin</td>
            @endforeach
        </tr>
    </tbody>
</table>