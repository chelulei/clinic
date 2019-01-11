<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($roles as $roles)

        <tr>
            <td>

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.roles.destroy', $roles->id]]) !!}
                <a href="{{ route('backend.roles.edit',$roles->id)}}" class="btn btn-outline-primary btn-sm">
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
            <td>{{$roles->title}}</td>
            @endforeach
        </tr>
    </tbody>
</table>