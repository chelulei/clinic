<table class="table table-bordered table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $key => $user)
        <tr>
            <td><img src="{{ $user->image_url}} " alt="" width="100" height="100"></td>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->phone}}</td>
            <td>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                @endif
            </td>
            <td>
                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.users.destroy', $user->id]]) !!}

                <a class="btn  btn-sm btn-outline-info" href="{{ route('backend.users.show',$user->id) }}">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    SHOW
                </a>
                <a href="{{ route('backend.users.edit',$user->id)}}" class="btn btn-sm  btn-outline-primary">
                    <i class="fa fa-edit"></i>
                    EDIT
                </a>
                <!-- /.btn  btn-default -->
                @if($user->id == config('custom.default_user_id') || $user->id ==  Auth::user()->id)
                    <button onclick="return false" type="submit" class="btn  btn-sm  btn-danger disabled">
                        <i class="fa fa-times"></i>
                        DELETE
                    </button>
                @else
                    <button onclick="return confirm('Are you sure?');" type="submit" class="btn  btn-sm  btn-outline-danger">
                        <i class="fa fa-times"></i>
                        DELETE
                    </button>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>





