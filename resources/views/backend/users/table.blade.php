<table id="Data_Table" class="table table-bordered display nowrap" style="width:100%">
    <thead>
    <tr>
        <th>Action</th>
        <th>Image</th>
        <th>Name</th>
        <th>Username</th>
        <th>Satus</th>
        <th>Role</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $key => $user)
        <tr>
            <td>
                <a data-toggle="tooltip" data-placement="top" title="View Details" class="btn  btn-md btn-outline-info" href="{{ route('backend.users.show',$user->slug) }}">
                    <i class="fa fa-search"></i>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.users.edit',$user->slug)}}" class="btn btn-md  btn-outline-primary">
                    <i class="fa fa-edit"></i>
                </a>
                <!-- /.btn  btn-default -->
                @if($user->id == config('custom.default_user_id') || $user->id ==  Auth::user()->id)
                    <button onclick="return false" type="submit" class="btn  btn-md  btn-danger disabled">
                        <i class="fa fa-times"></i>
                    </button>
                @else
                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$user->id}})"
              data-target="#DeleteModal" class="btn   btn-md  btn-outline-danger">
              <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i>

            </a>
                @endif

            </td>
            <td><img src="{{ $user->image_url}} " alt="" width="100" height="100"></td>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>
                @if($user->status == 1)
                    <a href="{{route('deactivate',[$user->id])}}" ><span class="badge badge-success">Active</span></a>
                    @else
                    <a href="{{route('activate',[$user->id])}}" ><span class="badge badge-danger">Inactive</span></a>
                    @endif
            </td>
            <td>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ ucwords($v) }}</label>
                    @endforeach
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


