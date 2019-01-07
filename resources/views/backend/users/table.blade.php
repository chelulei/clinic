<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>Image</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)

        <tr>
            <td>

                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.users.destroy', $user->id]]) !!}
                <a href="{{ route('backend.users.edit',$user->id)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-edit"></i>
                    <!-- /.fa fa-edit -->
                </a>
                <!-- /.btn  btn-default -->
                @if($user->id == config('custom.default_user_id') || $user->id ==  Auth::user()->id)
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
            <td><img src="{{ $user->image_url}} " alt="" width="100" height="100"></td>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>{!! $user->roleLabel() !!}</td>
            @endforeach
        </tr>
    </tbody>
</table>