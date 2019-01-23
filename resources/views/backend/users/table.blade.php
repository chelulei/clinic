<table id="DataTable" class="table table-bordered display nowrap" style="width:100%">
    <thead>
    <tr>
        <th>Action</th>
        <th>Image</th>
        <th>Name</th>
        <th>Username</th>
        <th>Role</th>
       
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $key => $user)
        <tr>
            <td>
                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.users.destroy', $user->id]]) !!}
                <a data-toggle="tooltip" data-placement="top" title="View Details" class="btn  btn-md btn-outline-info" href="{{ route('backend.users.show',$user->id) }}">
                    <i class="fa fa-search"></i>

                </a>
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.users.edit',$user->id)}}" class="btn btn-md  btn-outline-primary">
                    <i class="fa fa-edit"></i>

                </a>
                <!-- /.btn  btn-default -->
                @if($user->id == config('custom.default_user_id') || $user->id ==  Auth::user()->id)
                    <button onclick="return false" type="submit" class="btn  btn-md  btn-danger disabled">
                        <i class="fa fa-times"></i>
                    </button>
                @else
                    <button data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?');" type="submit" class="btn  btn-md  btn-outline-danger">
                        <i class="fa fa-times"></i>
                    </button>
                @endif
                {!! Form::close() !!}
            </td>
            <td><img src="{{ $user->image_url}} " alt="" width="100" height="100"></td>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>





