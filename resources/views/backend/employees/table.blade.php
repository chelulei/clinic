<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Service</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)

        <tr>
            <td>

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.employees.destroy', $employee->id]]) !!}
                <a href="{{ route('backend.employees.edit',$employee->id)}}" class="btn btn-outline-primary btn-sm">
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
            <td><img src="{{ $employee->image_url}} " alt="" width="100" height="100"></td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->email}}</td>
             <td>{{$employee->service->title}}</td>
            @endforeach
        </tr>
    </tbody>
</table>