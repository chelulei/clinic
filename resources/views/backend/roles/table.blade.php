<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Name</th>
        <th>Permissions</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($roles as $role)
        <tr>

            <td>{{ $role->name }}</td>

            <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
            <td>
                <a href="{{ route('backend.roles.edit',$role->id)}}" class="btn btn-outline-info pull-left" style="margin-right: 3px;">Edit</a>

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.roles.destroy', $role->id] ]) !!}
                <button onclick="return confirm('Are you sure?');" type="submit" class="btn  btn-outline-danger">
                    <i class="fa fa-times"></i>
                    DELETE
                </button>
                {!! Form::close() !!}

            </td>
        </tr>
    @endforeach
        </tbody>
</table>

</table>