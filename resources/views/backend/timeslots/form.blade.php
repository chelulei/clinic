@csrf
{{ Form::hidden('user_id', $user->id) }}
<div class="form-group">
    {{ Form::label('time', 'Time*') }}
    {{ Form::text('time', null, array('class' => 'form-control','id' => 'slot')) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description', null, array('class' => 'form-control')) }}
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-outline-primary btn-lg">save</button>
    <a href="{{ route('backend.roles.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cance</a>
</div>
<br>