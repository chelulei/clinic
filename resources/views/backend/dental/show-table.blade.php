<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Teeth</th>
        <th>Treatment</th>
        <th>Notes</th>
    </tr>
    </thead>
    <tbody>
          <tr>
            <td>
                @foreach($dental->patient->teeths as $teeth)
                    <span class="badge badge-primary">{{$teeth->name}}</span><br>
                @endforeach
            </td>
            <td>{{$dental->treat}}</td>
            <td>{{$dental->notes}}</td>
        </tr>
    </tbody>
</table>