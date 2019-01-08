
<div class="row">
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
<!-- /.col-md-4 -->
    <div class="col-md-2">
        <div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
            {!! Form::label('age') !!}
            {!! Form::text('age', null, ['class' => 'form-control']) !!}

            @if($errors->has('age'))
                <span class="help-block">{{ $errors->first('age') }}</span>
            @endif
        </div>
    </div>
<!-- /.col-md-4 -->
    <div class="col-md-3">
        <div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
            {!! Form::label('sex') !!}
            {!! Form::text('sex', null, ['class' => 'form-control']) !!}

            @if($errors->has('sex'))
                <span class="help-block">{{ $errors->first('sex') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
            {!! Form::label('status') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}

            @if($errors->has('status'))
                <span class="help-block">{{ $errors->first('status') }}</span>
            @endif
        </div>
    </div>
<!-- /.col-md-4 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
            {!! Form::label('address') !!}
            {!! Form::textarea('address', null, ['class' => 'form-control','rows' => 1, 'cols' =>5]) !!}

            @if($errors->has('address'))
                <span class="help-block">{{ $errors->first('address') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('date_birth') ? 'has-error' : '' }}">
            {!! Form::label('date of birth') !!}
            {!! Form::date('date_birth', null, ['class' => 'form-control']) !!}

            @if($errors->has('date_birth'))
                <span class="help-block">{{ $errors->first('date_birth') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-2">
        <div class="form-group {{ $errors->has('weight') ? 'has-error' : '' }}">
            {!! Form::label('weight') !!}
            {!! Form::text('weight', null, ['class' => 'form-control']) !!}

            @if($errors->has('weight'))
                <span class="help-block">{{ $errors->first('weight') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-2">
        <div class="form-group {{ $errors->has('height') ? 'has-error' : '' }}">
            {!! Form::label('height') !!}
            {!! Form::text('height', null, ['class' => 'form-control']) !!}

            @if($errors->has('height'))
                <span class="help-block">{{ $errors->first('height') }}</span>
            @endif
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('course') ? 'has-error' : ''}}">
            {!! Form::label('course') !!}
            {!! Form::text('course', null, ['class' => 'form-control']) !!}

            @if($errors->has('course'))
                <span class="help-block">{{ $errors->first('course') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('year') ? 'has-error' : '' }}">
            {!! Form::label('year') !!}
            {!! Form::text('year', null, ['class' => 'form-control']) !!}

            @if($errors->has('year'))
                <span class="help-block">{{ $errors->first('year') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('religion') ? 'has-error' : '' }}">
            {!! Form::label('religion') !!}
            {!! Form::text('religion', null, ['class' => 'form-control']) !!}

            @if($errors->has('religion'))
                <span class="help-block">{{ $errors->first('religion') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
</div>
<!-- /.row -->
<h5 class="">Person to contact in case of Emergency</h5>
<hr>
<div class="row">

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('name2') ? 'has-error' : '' }}">
            {!! Form::label('name') !!}
            {!! Form::text('name2', null, ['class' => 'form-control']) !!}

            @if($errors->has('name2'))
                <span class="help-block">{{ $errors->first('name2') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('contact') ? 'has-error' : '' }}">
            {!! Form::label('contact') !!}
            {!! Form::text('contact', null, ['class' => 'form-control']) !!}

            @if($errors->has('contact'))
                <span class="help-block">{{ $errors->first('contact') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('address2') ? 'has-error' : ''}}">
            {!! Form::label('address') !!}
            {!! Form::textarea('address2', null, ['class' => 'form-control','rows' => 1, 'cols' =>5]) !!}

            @if($errors->has('address2'))
                <span class="help-block">{{ $errors->first('address2') }}</span>
            @endif
        </div>
    </div>
    <!-- /.col-md-4 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-6">
        <h5> Family and Past Medical History</h5>
        <hr>
        {!! Form::checkbox('history[]', 'hpn') !!}
        {!! Form::label('HPN', 'HPN') !!}
        <br>
        {!! Form::checkbox('history[]', 'diabetes') !!}
        {!! Form::label('Diabetes', 'Diabetes') !!}

        <br>
        {!! Form::checkbox('history[]', 'Asthma') !!}
        {!! Form::label('Asthma', 'Asthma') !!}

        <br>
        {!! Form::checkbox('history[]', 'cardiac problems') !!}
        {!! Form::label('Cardiac problems', 'Cardiac problems') !!}

        <br>
        {!! Form::checkbox('history[]', 'arthritis') !!}
        {!! Form::label('Arthritis', 'Arthritis') !!}
        <br>
        <br>
       {!! Form::label('others') !!}
       {!! Form::textarea('others', null, ['class' => 'form-control','rows' => 1, 'cols' =>5]) !!}
        <!-- /# -->
        <br>
        {!! Form::label('allergies') !!}
        {!! Form::textarea('allergies', null, ['class' => 'form-control','rows' => 1, 'cols' =>5]) !!}
        <span class="border-right"></span>
    </div>
    <!-- /.col-md-6 -->
    <div class="col-md-6">
        <h5> Immunizations</h5>
        <hr>
        {!! Form::checkbox('immune[]', 'bcg') !!}
        {!! Form::label('BCG', 'BCG') !!}

        <br>
        {!! Form::checkbox('immune[]', 'dpt') !!}
        {!! Form::label('DPT', 'DPT') !!}
        <br>
        {!! Form::checkbox('immune[]', 'opv') !!}
        {!! Form::label('OPV', 'OPV') !!}
        <br>
        {!! Form::checkbox('immune[]', 'bcg') !!}
        {!! Form::label('BCG', 'BCG') !!}

        <br>
        {!! Form::checkbox('immune[]', 'hep.b') !!}
        {!! Form::label('Hep.B', 'DPT') !!}
        <br>
        {!! Form::checkbox('immune[]', 'measles') !!}
        {!! Form::label('Measles', 'Measles') !!}
        <br>
        {!! Form::label('others') !!}
        {!! Form::textarea('medics', null, ['class' => 'form-control','rows' => 1, 'cols' =>5]) !!}
        <br>
    {!! Form::label('Meds Taken:') !!}
    {!! Form::textarea('others2', null, ['class' => 'form-control','rows' => 1, 'cols' =>5]) !!}
        <br>
    </div>
</div>
    <!-- /.col-md-6 -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('illness') ? 'has-error' : '' }}">
                {!! Form::label('Previous Illness') !!}
                {!! Form::text('illness', null, ['class' => 'form-control']) !!}

                @if($errors->has('illness'))
                    <span class="help-block">{{ $errors->first('illness') }}</span>
                @endif
            </div>
        </div>
        <!-- /.co-md-6 -->
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('contact') ? 'has-error' : '' }}">
                {!! Form::label('Previous Hospitalization') !!}
                {!! Form::text('hospital', null, ['class' => 'form-control']) !!}

                @if($errors->has('hospital'))
                    <span class="help-block">{{ $errors->first('hospital') }}</span>
                @endif
            </div>
        </div>
        <!-- /.co-md-6 -->
    </div>
    <!-- /.row -->
<!-- /.row -->
    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary btn-lg">{{ $patient->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.patients.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cance</a>

    </div>
    <!-- /.form-group -->




