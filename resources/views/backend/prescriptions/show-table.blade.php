<table class="table table-bordered" id="DataTable">
    <thead>
    <tr>
        <th>Assesment</th>
        <th>Treatment</th>
        <th>Prescriptions</th>
    </tr>
    </thead>
    <tbody>
          <tr>

           <td>{{$prescription->assessment}}</td>
              <td>{{$prescription->medication}}</td>
              <td>{{$prescription->prescriptions}}</td>
        </tr>
    </tbody>
</table>