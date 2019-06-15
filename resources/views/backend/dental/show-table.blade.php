<table class="table table-bordered border" id="Data_Table">
    <tbody>
           <tr>
              <td>
                 Teeth
              </td>
            <td>
                @foreach($dental->patient->teeths as $teeth)
                    <span class="badge badge-primary">{{$teeth->name}}</span><br>
                @endforeach
            </td>
            </tr>
             <tr>
                <td>
                   Treatment
                </td>
                <td>{!! $dental->treat !!}</td>
                </tr>
                <tr>
                    <td>
                      Notes
                    </td>
                   <td>{!! $dental->notes !!}</td>
                </tr>

    </tbody>
</table>
