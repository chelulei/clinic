<table class="table table-bordered" id="Data_Table">
    <thead>
    <tr>
        <th  width="80">Action</th>
        <th>Name</th>
        <th>Permissions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($roles as $role)
        <tr>
            <td>
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.roles.edit',$role->id)}}" class="btn btn-md  btn-outline-primary">
                    <i class="fa fa-edit"></i>

                </a>
             <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$role->id}})"
              data-target="#DeleteModal" class="btn   btn-md  btn-outline-danger">
              <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i>

            </a>

            </td>
            <td>{{ ucwords($role->name)}}</td>
            <td>
                <strong>
                {{ str_replace(array('[',']','"'),' ', $role->permissions()->pluck('name')) }}
                </strong>
            <br>
        </td>
        </tr>
    @endforeach
        </tbody>
</table>


