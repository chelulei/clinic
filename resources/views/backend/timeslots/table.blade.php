<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($slots as $slot)
        <tr>

            <td>{{ $slot->time }}</td>
            <td>{{ $slot->description }}</td>
            <td>
                <a href="{{ route('backend.slots.edit',$slot->id)}}" class="btn btn-outline-info pull-left" style="margin-right: 3px;">Edit</a>
                {!! Form::open(['method' => 'DELETE', 'route' => ['backend.slots.destroy', $slot->id] ]) !!}
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