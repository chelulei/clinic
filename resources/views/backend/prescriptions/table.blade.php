<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Action</th>
        <th>DATE</th>
        <th>ID NO</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($prescriptions as $prescription)
        <tr>
            <td width="120">
                <a data-toggle="tooltip" data-placement="top" title="View Details" href="{{ route('backend.prescriptions.show',$prescription->slug)}}" class="btn btn-outline-info btn-sm">
                    <i class="fa fa-search"></i>
                    <!-- /.fa fa-edit -->
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.prescriptions.edit',$prescription->slug)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-edit"></i>
                    <!-- /.fa fa-edit -->
                </a>
<a href="javascript:;" data-toggle="modal" onclick="deleteData({{$prescription->id}})"
              data-target="#DeleteModal" class="btn   btn-md  btn-outline-danger">
              <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i>

            </a>
            </td>
            <td>
                <a data-toggle="tooltip" data-placement="top" title="View Details" href="{{ route('backend.prescriptions.show',$prescription->slug)}}">
                {{ $prescription->date}}
                </a>
            </td>
            <td>{{ $prescription->patient->idno}}</td>
            <td>{{ $prescription->patient->name}}</td>
            @endforeach
        </tr>
    </tbody>
</table>
