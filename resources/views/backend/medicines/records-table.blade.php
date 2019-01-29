<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>DATE</th>
            <th>DETAILS</th>
        </tr>
        </thead>
        <tbody>
        @foreach($prescriptions as $prescription)
        <tr>
            <td>{{$prescription->id}}</td>
            <td>{{$prescription->date}}</td>
            <td>
                <a data-toggle="tooltip" data-placement="top" title="View Details" href="{{ route('backend.prescriptions.show',$prescription->id)}}" class="btn btn-outline-info btn-sm">
                    <i class="fa fa-search"></i>
                    VIEW DETAILS
                </a>
            </td>
        </tr>
            @endforeach

        </tbody>
    </table>
</div>
<br>
