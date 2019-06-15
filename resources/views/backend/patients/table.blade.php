<table class="table table-bordered" id="Data_Table">
    <thead>
    <tr>
        <th>Action</th>
        <th>ID No</th>
        <th>Type</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($patients as $patient)

        <tr>
            <td>
                <a data-toggle="tooltip" data-placement="top" title="View Details" href="{{ route('backend.patients.show',$patient->slug)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-search"></i>
                    <!-- /.fa fa-edit -->
                </a>

                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.patients.edit',$patient->slug)}}" class="btn btn-outline-primary btn-sm">
                    <i class="fa fa-edit"></i>
                    <!-- /.fa fa-edit -->
                </a>
                  <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$patient->id}})"
              data-target="#DeleteModal" class="btn   btn-md  btn-outline-danger">
              <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i>

            </a>
            </td>
            <td>{{$patient->idno}}</td>
            <td>{{$patient->type}}</td>
            <td>{{$patient->name}}</td>
            @endforeach
        </tr>
    </tbody>
</table>
