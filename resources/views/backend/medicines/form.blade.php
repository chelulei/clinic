
    <div class="form-group row required">
        {!! Form::label("patient_id","Patient",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::select('patient_id',  App\Patient::pluck('name', 'id'), null, ["class"=>"form-control".($errors->has('patient_id')?" is-invalid":""), 'placeholder' => 'Choose patient','required' =>'']) !!}
            <span id="error-patient_id" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label("med_id","Medicine",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::select("med_id", App\Inventory::pluck('name', 'id'),null,["class"=>"form-control".($errors->has('med_id')?" is-invalid":""), 'placeholder' => 'Choose medicine','required' =>'']) !!}
        <span id="error-med_id" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("quantity","quantity",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::number("quantity",null,["class"=>"form-control".($errors->has('quantity')?" is-invalid":""), 'placeholder'=>'quantity']) !!}
            <span id="error-quantity" class="invalid-feedback"></span>
        </div>
    </div>


