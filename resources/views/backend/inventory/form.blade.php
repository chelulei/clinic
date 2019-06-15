
@if(isset($inventory))
    {!! Form::model($inventory,['method'=>'put','id'=>'frm']) !!}
@else
    {!! Form::open(['id'=>'frm']) !!}
@endif
<div class="modal-header">
    <h5 class="modal-title">{{isset($inventory)?'Edit':'New'}} drug</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">


    <div class="form-group row required">
        {!! Form::label("name","Name",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("name",null,["class"=>"form-control".($errors->has('name')?" is-invalid":""),'placeholder'=>'Name','id'=>'focus']) !!}
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("quantity","quantity",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::number("quantity",null,["class"=>"form-control".($errors->has('quantity')?" is-invalid":""),'placeholder'=>'quantity']) !!}
            <span id="error-quantity" class="invalid-feedback"></span>
        </div>
    </div>
     <div class="form-group row required">
            {!! Form::label('body','Descript',["class"=>"col-form-label col-md-3"]) !!}
             <div class="col-md-9">
          {!! Form::textarea('body', null, ["class" => "form-control" .($errors->has('body')?" is-invalid":""),'rows' => 5, 'cols' =>5,'required' => '']) !!}
             <span id="error-body" class="invalid-feedback"></span>
             </div>
        </div>


</div>

<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
    {!! Form::submit("Save",["class"=>"btn btn-primary"])!!}
</div>
{!! Form::close() !!}

