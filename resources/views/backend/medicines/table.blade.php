<table class="table table-bordered" id="Data_Table">
    <thead>
    <tr>
        <th>DATE</th>
        <th>Patient Name</th>
        <th>Medicine</th>
        <th>Quantity</th>
    </tr>
    </thead>
    <tbody>
    @foreach($medicines as $medicine)
        <tr>
            <td>
                {{ $medicine->date}}
            </td>
            <td>{{ $medicine->patient->name}}</td>

            <td>{{ $medicine->MedicineName($medicine->med_id) }}</td>

            <td>{{ $medicine->quantity}}</td>
            @endforeach
        </tr>
    </tbody>
</table>
