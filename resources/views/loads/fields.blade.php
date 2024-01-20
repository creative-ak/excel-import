<div class="col-md-12">
    <div class="form-group row">
        <strong>Load Information</strong>
    </div>
</div>
<div class="col-md-2"> 
    {!! Form::label('load_no', 'Load#', ['class'=>'control-label']) !!}     
    {!! Form::text('load_no', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-3"> 
    {!! Form::label('bill_to', 'Bill To', ['class'=>'control-label']) !!}     
    {!! Form::text('bill_to', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-3"> 
    {!! Form::label('dispatcher', 'Dispatcher', ['class'=>'control-label']) !!}     
    {!! Form::text('dispatcher', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-3"> 
    {!! Form::label('sale_rep', 'Sale Representative', ['class'=>'control-label']) !!}     
    {!! Form::text('sale_rep', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-2"> 
    {!! Form::label('status', 'Status', ['class'=>'control-label']) !!}     
    {!! Form::select('status',['open'=>'open'], null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-1"> 
    {!! Form::label('wo', 'W/O', ['class'=>'control-label']) !!}     
    {!! Form::text('wo', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-2"> 
    {!! Form::label('type', 'Type', ['class'=>'control-label text-danger']) !!}     
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-2"> 
    {!! Form::label('type_rate', 'Rate', ['class'=>'control-label text-danger']) !!}     
    {!! Form::text('type_rate', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-1"> 
    {!! Form::label('pds', 'P/Ds', ['class'=>'control-label']) !!}     
    {!! Form::text('pds', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-3"> 
    {!! Form::label('fsc_rate', 'F.S.C. ', ['class'=>'control-label']) !!}
    {{ Form::checkbox('fsc', 'yes', false) }}
    {!! Form::label('fsc_rate', ' Rate %', ['class'=>'control-label']) !!}
    {!! Form::text('fsc_rate', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-3"> 
    {!! Form::label('other_charges', 'Other Charges', ['class'=>'control-label']) !!}     
    {!! Form::text('other_charges', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-2"> 
    {!! Form::label('usd_rate', 'USD Rate', ['class'=>'control-label']) !!}     
    {!! Form::text('usd_rate', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-2"> 
    {!! Form::label('carrier', 'Carrier', ['class'=>'control-label']) !!}     
    {!! Form::text('carrier', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-2"> 
    {!! Form::label('driver', 'Driver', ['class'=>'control-label']) !!}     
    {!! Form::text('driver', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-2"> 
    {!! Form::label('equipment_type', 'Equipment Type', ['class'=>'control-label']) !!}     
    {!! Form::text('equipment_type', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-2"> 
    {!! Form::label('truck', 'Truck', ['class'=>'control-label']) !!}     
    {!! Form::text('truck', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-2"> 
    {!! Form::label('trailer', 'Trailer', ['class'=>'control-label']) !!}     
    {!! Form::text('trailer', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-2"> 
    {!! Form::label('flat_rate', 'Flat Rate', ['class'=>'control-label']) !!}     
    {!! Form::text('flat_rate', null, ['class' => 'form-control']) !!}
</div>
