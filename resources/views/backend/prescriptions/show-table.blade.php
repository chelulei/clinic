<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>BR</th>
            <th>PR</th>
            <th>RR</th>
            <th>TEMP</th>
            <th>WT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$prescription->bp}}</td>
            <td>{{$prescription->pr}}</td>
            <td>{{$prescription->rr}}</td>
            <td>{{$prescription->temp}}</td>
            <td>{{$prescription->wt}}</td>
        </tr>
        </tbody>
    </table>
</div>
<br>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Complaints</h5>
        <p class="card-text">
            {!! $prescription->complaints !!}
        </p>

    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">HPI/ROS/PE</h5>
        <p class="card-text">
            {!! $prescription->hpi !!}
        </p>

    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Physical Examination</h5>
        <p class="card-text">
            {!! $prescription->examination !!}
        </p>

    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Assessment / Primary Immunisation</h5>
        <p class="card-text">
            {!! $prescription->assessment !!}
        </p>

    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Treatment</h5>
        <p class="card-text">
            {!! $prescription->treatment !!}
        </p>

    </div>
</div>

<a class="btn btn-outline-primary btn-lg" href="{{ route('backend.prescriptions.edit',$prescription->slug)}}">UPDATE</a>

