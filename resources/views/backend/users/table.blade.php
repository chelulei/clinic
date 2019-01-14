<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Roles</th>
        <th width="280px">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $key => $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
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





