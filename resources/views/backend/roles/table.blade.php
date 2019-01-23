<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>Name</th>
        <th>Permissions</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($roles as $role)
        <tr>
            <td>
                <a data-toggle="tooltip" data-placement="top" title="EDIT" href="{{ route('backend.roles.edit',$role->id)}}" class="btn btn-sm btn-outline-primary pull-left" style="margin-right: 3px;">
                    <i class="fa fa-edit"></i>
                </a>

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.roles.destroy', $role->id] ]) !!}
                <button data-toggle="tooltip" data-placement="top" title="DELETE" onclick="return confirm('Are you sure?');" type="submit" class="btn btn-sm  btn-outline-danger">
                    <i class="fa fa-times"></i>
                </button>
                {!! Form::close() !!}

            </td>
            <td>{{ $role->name }}</td>
            <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}<br></td>
        </tr>
    @endforeach
        </tbody>
</table>

</table>