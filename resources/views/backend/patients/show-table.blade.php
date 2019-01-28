<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID No</th>
            <th>Type</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$patient->idno}}</td>
                <td>{{$patient->type}}</td>
                <td>{{$patient->name}}</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Date of Birth</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$patient->date_birth}}</td>
            <td>{{$patient->age}}</td>
            <td>{{$patient->sex}}</td>
            <td>{{$patient->status}}</td>
        </tr>
        </tbody>
    </table>
</div>
<br>
<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
        <th>Address</th>
        <th>Weight</th>
        <th>Height</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$patient->address}}</td>
            <td>{{$patient->weight}}</td>
            <td>{{$patient->height}}</td>
        </tr>
        </tbody>
    </table>
</div>
<br>
<div class="table-responsive-sm">
    <h4 class="m-3 text-danger">Emergency Contacs</h4>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$patient->name2}}</td>
            <td>{{$patient->contact}}</td>
            <td>{{$patient->address2}}</td>
        </tr>
        </tbody>
    </table>
</div>
<br>
<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Family and Past Medical History</th>
            <th>Immunizations</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                @foreach($histories as $history)
                    <label class="checkbox-inline "for="histo[{{ $history->id }}]">
                        <input id="histo[{{ $history->id }}]" name="histo[{{ $history->id }}]" type="checkbox" value="{{ $history->id }}"
                                {{$patient->histories->find($history->id) ? 'checked' : '' }}
                        > {{ $history->name }}
                    </label>
                    <br>
                @endforeach
            </td>
            <td>
                @foreach($immunizations as $immune)
                    <label class="checkbox-inline "for="immun[{{ $immune->id }}]">
                        <input id="immun[{{ $immune->id }}]" name="immun[{{ $immune->id }}]" type="checkbox" value="{{ $immune->id }}"
                                {{$patient->immunizations->find($immune->id) ? 'checked' : '' }}
                        > {{ $immune->name }}
                    </label>
                    <br>

                @endforeach
            </td>
        </tr>
        </tbody>
    </table>
</div>
<br>
<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Allergies</th>
            <th>Meds Taken</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$patient->allergies}}</td>
            <td>{{$patient->medics}}</td>
        </tr>
        </tbody>
    </table>
</div>
<br>
<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Previous Illness</th>
            <th>Previous Hospitalization</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$patient->illness}}</td>
            <td>{{$patient->hospital}}</td>
        </tr>
        </tbody>
    </table>
</div>
<br>
    <a class="btn btn-outline-primary btn-lg" href="{{ route('backend.patients.edit',$patient->id)}}">UPDATE</a>

    <!-- /.fa fa-edit -->
