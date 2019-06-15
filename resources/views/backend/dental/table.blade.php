<table class="table table-bordered" id="Data_Table">
    <thead>
    <tr>
        <th>Action</th>
        <th>ID NO</th>
        <th>Name</th>
        <th>Teeth</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dentals as $dental)
        <tr>
            <td>

                <a data-toggle="tooltip" data-placement="top" title="View Details" href="{{ route('backend.dental.show',$dental->slug)}}" class="btn btn-outline-info btn-sm">
                    <i class="fa fa-search"></i>
                    <!-- /.fa fa-edit -->
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.dental.edit',$dental->id)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-edit"></i>
                    <!-- /.fa fa-edit -->
                </a>

                 <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$dental->id}})"
              data-target="#DeleteModal" class="btn   btn-md  btn-outline-danger">
              <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i>

            </a>

            </td>
            <td>{{$dental->patient->idno}}</td>
            <td>{{ ucwords($dental->patient->name) }}</td>
            <td>
                @foreach($dental->patient->teeths as $teeth)
                    <span class="badge badge-primary">{{$teeth->name}}</span><br>
                @endforeach
            </td>
            @endforeach
        </tr>
    </tbody>
</table>
