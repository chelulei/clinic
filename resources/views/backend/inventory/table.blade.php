<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>name</th>
        <th>Quantity</th>
        <th>Descriptions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($inventories as $inventory)

        <tr>
            <td>

                {{--{!! Form::open(['method' => 'DELETE', 'route' => ['backend.inventories.destroy', $inventory->id]]) !!}--}}
                {{--<button data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?');" type="submit" class="btn btn-sm btn-outline-danger">--}}
                    {{--<i class="fa fa-times"></i>--}}
                {{--</button>--}}
                {{--<!-- /.btn bt-danger -->--}}
                {{--{!! Form::close() !!}--}}
                <div class="btn-group">
                    <button type="button" id="dropdown" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-list" aria-hidden="true"></i>   More Actions
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('backend.inventories.edit',$inventory->id)}}"><i class="fa fa-pencil-square" aria-hidden="true"></i> Update Product</a>
                        <a class="dropdown-item" href="{{ route('backend.medicines.create',$inventory->id)}}"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Give Medicine</a>
                        <a class="dropdown-item" href="#">  <i class="fa fa-info-circle" aria-hidden="true"></i> Medical History</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            <td>{{$inventory->name}}</td>
            <td>{{$inventory->quantity}}</td>
            <td>{{str_limit($inventory->body,50)}}</td>
            @endforeach
        </tr>
    </tbody>
</table>
