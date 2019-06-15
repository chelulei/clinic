<table class="table table-bordered" id="Data_Table">
    <thead>
    <tr>
        <th>Action</th>
        <th>Patient</th>
        <th>Date</th>
        <th>Time</th>
        <th>Status</th>

    </tr>
    </thead>
    <tbody>
    @foreach($appointments as $appointment)
        <tr>
            <td width='200'>
 <a data-toggle="tooltip" data-placement="top" title="Edit"
 href="{{ route('backend.appointments.edit',$appointment->id)}}" class="btn btn-md  btn-outline-primary">
                    <i class="fa fa-edit"></i>

                </a>
                <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$appointment->id}})"
              data-target="#DeleteModal" class="btn   btn-md btn-outline-danger">

              <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i>
            </a>

            </td>
            <td>{{$appointment->patient->name}}</td>
            <td>{{$appointment->date}}</td>
            <td>{{$appointment->time}}</td>
            <td>
                 @if($appointment->status == 1)
                   <span class="badge badge-success">Completed</span>
                    @else
                    <a href="{{route('complete',[$appointment->id])}}" ><span class="badge badge-danger">pending</span></a>
                    @endif
            </td>
            @endforeach
        </tr>
    </tbody>
</table>
