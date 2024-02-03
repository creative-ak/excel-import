<div class="col-md-12"
    style="border-bottom: 1px solid #38383cc2;
    margin: 10px 0 10px 0; color: #38383cc2;
    text-transform: uppercase;">
    <div class="form-group row">
        <strong>Load Information</strong>
    </div>
</div>
<div class="col-md-2"> 
    {!! Form::label('load_no', 'Load#', ['class'=>'control-label']) !!}     
    {!! Form::text('load_no', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-2"> 
    {!! Form::label('bill_to', 'Bill To', ['class'=>'control-label']) !!}     
    {!! Form::text('bill_to', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-2"> 
    {!! Form::label('dispatcher', 'Dispatcher', ['class'=>'control-label']) !!}     
    {!! Form::text('dispatcher', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-2"> 
    {!! Form::label('sale_rep', 'Sale Representative', ['class'=>'control-label']) !!}     
    {!! Form::text('sale_rep', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-2"> 
    {!! Form::label('status', 'Status', ['class'=>'control-label']) !!}     
    {!! Form::select('status',['open'=>'open','close'=>'close'], null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-2"> 
    {!! Form::label('wo', 'W/O', ['class'=>'control-label']) !!}     
    {!! Form::text('wo', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-3"> 
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

<div class="col-md-2"> 
    {!! Form::label('fsc_rate', 'F.S.C. ', ['class'=>'control-label']) !!}
    {{ Form::checkbox('fsc', 'yes', false) }}
    {!! Form::label('fsc_rate', ' Rate %', ['class'=>'control-label']) !!}
    {!! Form::text('fsc_rate', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-2"> 
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

<!-- shipper -->
<div class="col-md-12"
    style="border-bottom: 1px solid #38383cc2;
    margin: 10px 0 10px 0; color: #38383cc2;
    text-transform: uppercase;">
    <div class="form-group row">
        <strong>Shipper</strong>
    </div>
</div>
<div class="col-md-4"> 
    {!! Form::label('name', 'Shipper', ['class'=>'control-label']) !!}     
    {!! Form::text('name', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-4"> 
    {!! Form::label('location', 'Location', ['class'=>'control-label']) !!}     
    {!! Form::text('location', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-2"> 
    {!! Form::label('ship_date', 'Date', ['class'=>'control-label']) !!}     
    {!! Form::date('ship_date', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-2"> 
    {!! Form::label('ship_time', 'Time', ['class'=>'control-label']) !!}     
    {!! Form::time('ship_time', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-2"> 
    {!! Form::label('description', 'Description', ['class'=>'control-label']) !!}     
    {!! Form::text('description', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-4"> 
    {!! Form::label('type', 'Type', ['class'=>'control-label']) !!}     
    {!! Form::select('type',['open'=>'open','close'=>'close'], null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-2"> 
    {!! Form::label('qty', 'Qty', ['class'=>'control-label text-danger']) !!}     
    {!! Form::text('qty', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-1"> 
    {!! Form::label('weight', 'Weight', ['class'=>'control-label text-danger']) !!}     
    {!! Form::text('weight', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-1"> 
    {!! Form::label('amt', 'Value', ['class'=>'control-label']) !!}     
    {!! Form::text('amt', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-4"> 
    {!! Form::label('notes', 'Shipping Notes', ['class'=>'control-label']) !!}     
    {!! Form::text('notes', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-4"> 
    {!! Form::label('po_number', 'P.O. Numbers', ['class'=>'control-label']) !!}     
    {!! Form::text('po_number', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-4"> 
    {!! Form::label('customs_broker', 'Customs Broker', ['class'=>'control-label']) !!}     
    {!! Form::text('customs_broker', null, ['class' => 'form-control']) !!}
</div>

<!-- Consignee -->
<div class="col-md-12"
    style="border-bottom: 1px solid #38383cc2;
    margin: 10px 0 10px 0; color: #38383cc2;
    text-transform: uppercase;">
    <div class="form-group row">
        <strong>Consignee</strong>
    </div>
</div>
<div class="col-md-4"> 
    {!! Form::label('con_name', 'Consignee', ['class'=>'control-label']) !!}     
    {!! Form::text('con_name', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-4"> 
    {!! Form::label('con_location', 'Location', ['class'=>'control-label']) !!}     
    {!! Form::text('con_location', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-2"> 
    {!! Form::label('consign_date', 'Date', ['class'=>'control-label']) !!}     
    {!! Form::date('consign_date', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-2"> 
    {!! Form::label('consign_time', 'Time', ['class'=>'control-label']) !!}     
    {!! Form::time('consign_time', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-2"> 
    {!! Form::label('con_description', 'Description', ['class'=>'control-label']) !!}     
    {!! Form::text('con_description', null, ['class' => 'form-control']) !!}       
</div>
<div class="col-md-4"> 
    {!! Form::label('con_type', 'Type', ['class'=>'control-label']) !!}     
    {!! Form::select('con_type',['open'=>'open','close'=>'close'], null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-2"> 
    {!! Form::label('con_qty', 'Qty', ['class'=>'control-label text-danger']) !!}     
    {!! Form::text('con_qty', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-1"> 
    {!! Form::label('con_weight', 'Weight', ['class'=>'control-label text-danger']) !!}     
    {!! Form::text('con_weight', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-1"> 
    {!! Form::label('con_amt', 'Value', ['class'=>'control-label']) !!}     
    {!! Form::text('con_amt', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-4"> 
    {!! Form::label('con_notes', 'Delivery Notes', ['class'=>'control-label']) !!}     
    {!! Form::text('con_notes', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-4"> 
    {!! Form::label('con_po_number', 'P.O. Numbers', ['class'=>'control-label']) !!}     
    {!! Form::text('con_po_number', null, ['class' => 'form-control']) !!}
</div>

<!-- <div class="row">
    <div class="col-md-2">
           {!! Form::label('ProMiles', 'ProMiles Miles', ['class'=>'control-label']) !!}     
           {!! Form::text('ProMiles', null, ['class' => 'form-control']) !!} 
    </div>
    <div class="col-md-1">
           {!! Form::label('Proempty', 'Empty', ['class'=>'control-label']) !!}     
           {!! Form::text('Proempty', null, ['class' => 'form-control']) !!} 
    </div>
    <div class="col-md-2">
           {!! Form::label('driverMiles', 'Driver Miles', ['class'=>'control-label']) !!}     
           {!! Form::text('driverMiles', null, ['class' => 'form-control']) !!} 
    </div>
    <div class="col-md-1">
           {!! Form::label('driverempty', 'Empty', ['class'=>'control-label']) !!}     
           {!! Form::text('driverempty', null, ['class' => 'form-control']) !!} 
    </div>
    <div class="col-md-1">
           {!! Form::label('hourly', 'Hourly', ['class'=>'control-label']) !!}     
           {!! Form::text('hourly', null, ['class' => 'form-control']) !!} 
    </div>
</div> -->