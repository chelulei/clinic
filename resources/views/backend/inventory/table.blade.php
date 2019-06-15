<table class="table table-bordered" id="Data_Table" min-height='50%'>
    <thead>
    <tr>
        <th>Action</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Descriptions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($inventories as $inventory)

        <tr>
            <td width="100">
     <a class="btn btn-outline-primary btn-md" title="Edit" href="#modalForm" data-toggle="modal"
                       data-href="{{url('inventorie/update/'.$inventory->id)}}">
                    <i class="fa fa-edit"></i>
                    <!-- /.fa fa-edit -->
                </a>
                   <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$inventory->id}})"
              data-target="#DeleteModal" class="btn   btn-md  btn-outline-danger">
              <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i>
              </a>
            <td>{{$inventory->name}}</td>
            <td width="250">{{$inventory->quantity}}
                <span class="float-right">
                    <button class="btn btn-info" data-myname="{{$inventory->name}}"
                        data-myqnty="{{$inventory->quantity}}"  data-inventoryid={{$inventory->id}} data-toggle="modal" data-target="#edit">Update</button>
                </span>
            </td>
            <td>{!! $inventory->body !!}</td>
            @endforeach
        </tr>
    </tbody>
</table>
