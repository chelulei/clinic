@csrf
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'']) !!}
        
            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>

    <div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
        {!! Form::label('quantity') !!}
        {!! Form::number('quantity', null, ['class' => 'form-control','placeholder'=>'']) !!}

        @if($errors->has('quantity'))
            <span class="help-block">{{ $errors->first('quantity') }}</span>
        @endif
    </div>

        <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
            {!! Form::label('body','Description') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control','rows' => 3, 'cols' =>5]) !!}

            @if($errors->has('body'))
                <span class="help-block">{{ $errors->first('body') }}</span>
            @endif
        </div>
    <!-- /.col-md-4 -->
<!-- /.row -->
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $inventory->exists ? 'Update' : 'Save' }}</button>
    <a href="{{ route('backend.inventories.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cance</a>
</div>
<!-- /.form-group -->




