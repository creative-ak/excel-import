<div class="col-md-12"
    style="border-bottom: 1px solid #38383cc2;
    margin: 10px 0 10px 0; color: #38383cc2;
    text-transform: uppercase;">
    <div class="form-group row">
        <strong>Load Information</strong>
    </div>
</div>
<div class="col-sm-4">
    <!-- load_no Field -->
    <div class="col-sm-12">
        {!! Form::label('load_no', 'Load No:') !!}
        <p>{{$load->load_no? $load->load_no:'-'}}</p>
    </div>

    <!-- bill_to Field -->
    <div class="col-sm-12">
        {!! Form::label('bill_to', 'Bill To:') !!}
        <p>{{ $load->bill_to? $load->bill_to:'-' }}</p>
    </div>

    <!-- dispatcher Field -->
    <div class="col-sm-12">
        {!! Form::label('dispatcher', 'Dispatcher:') !!}
        <p>{{ $load->dispatcher? $load->dispatcher:'-' }}</p>
    </div>

    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('type', 'Type:') !!}
        <p>{{ $load->type? $load->type:'-' }}</p>
    </div>

    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('pds', 'PDS:') !!}
        <p>{{ $load->pds? $load->pds:'-' }}</p>
    </div>

    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('other_charges', 'Other Charges:') !!}
        <p>{{ $load->other_charges? $load->other_charges:'-' }}</p>
    </div>

    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('carrier', 'Carrier:') !!}
        <p>{{ $load->carrier? $load->carrier:'-' }}</p>
    </div>

</div>
<div class="col-sm-4">
    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('driver', 'Driver:') !!}
        <p>{{ $load->driver? $load->driver:'-' }}</p>
    </div>

    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('trailer', 'Trailer:') !!}
        <p>{{ $load->trailer? $load->trailer:'-' }}</p>
    </div>

    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('flat_rate', 'Flat Rate:') !!}
        <p>{{ $load->flat_rate? $load->flat_rate:'-' }}</p>
    </div>
    <!-- sale_rep Field -->
    <div class="col-sm-12">
        {!! Form::label('sale_rep', 'Salea Rep:') !!}
        <p>{{ $load->sale_rep? $load->sale_rep:'-' }}</p>
    </div>

    <!-- status Field -->
    <div class="col-sm-12">
        {!! Form::label('status', 'Status:') !!}
        <p>{{ $load->status? $load->status:'-' }}</p>
    </div>

    <!-- WO Field -->
    <div class="col-sm-12">
        {!! Form::label('wo', 'WO:') !!}
        <p>{{ $load->wo? $load->wo:'-' }}</p>
    </div>

</div>
<div class="col-sm-4">
    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('type_rate', 'Type Rate:') !!}
        <p>{{ $load->type_rate? $load->type_rate:'-' }}</p>
    </div>

    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('fsc', 'FSC:') !!}
        <p>{{ $load->fsc? $load->fsc:'-' }}</p>
    </div>

    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('fsc_rate', 'FSC Rate:') !!}
        <p>{{ $load->fsc_rate? $load->fsc_rate:'-' }}</p>
    </div>

    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('usd_rate', 'USD Rate:') !!}
        <p>{{ $load->usd_rate? $load->usd_rate:'-' }}</p>
    </div>

    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('equipment_type', 'Equipment Type:') !!}
        <p>{{ $load->equipment_type? $load->equipment_type:'-' }}</p>
    </div>

    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('truck', 'Truck:') !!}
        <p>{{ $load->truck? $load->truck:'-' }}</p>
    </div>
</div>
@if($load->shipper)
<!-- shipper -->
<div class="col-md-12"
    style="border-bottom: 1px solid #38383cc2;
    margin: 10px 0 10px 0; color: #38383cc2;
    text-transform: uppercase;">
    <div class="form-group row">
        <strong>Shipper</strong>
    </div>
</div>

<div class="col-sm-4">
    <!-- name Field -->
    <div class="col-sm-12">
        {!! Form::label('name', 'Shipper name:') !!}
        <p>{{$load->shipper->name? $load->shipper->name:'-'}}</p>
    </div>

    <!-- location Field -->
    <div class="col-sm-12">
        {!! Form::label('location', 'Location:') !!}
        <p>{{ $load->shipper->location? $load->shipper->location:'-' }}</p>
    </div>

    <!-- ship_date Field -->
    <div class="col-sm-12">
        {!! Form::label('ship_date', 'Shiping Date:') !!}
        <p>{{ $load->shipper->ship_date? $load->shipper->ship_date:'-' }}</p>
    </div>

    <!-- description Field -->
    <div class="col-sm-12">
        {!! Form::label('description', 'Description:') !!}
        <p>{{ $load->shipper->description? $load->shipper->description:'-' }}</p>
    </div>
</div>
<div class="col-sm-4">
    <!-- amt Field -->
    <div class="col-sm-12">
        {!! Form::label('amt', 'Ammount:') !!}
        <p>{{ $load->shipper->amt? $load->shipper->amt:'-' }}</p>
    </div>

    <!-- notes Field -->
    <div class="col-sm-12">
        {!! Form::label('notes', 'Notes:') !!}
        <p>{{ $load->shipper->notes? $load->shipper->notes:'-' }}</p>
    </div>

    <!-- po_number Field -->
    <div class="col-sm-12">
        {!! Form::label('po_number', 'PO Number:') !!}
        <p>{{ $load->shipper->po_number? $load->shipper->po_number:'-' }}</p>
    </div>

    <!-- ship_time Field -->
    <div class="col-sm-12">
        {!! Form::label('ship_time', 'Shiping time:') !!}
        <p>{{ $load->shipper->ship_time? $load->shipper->ship_time:'-' }}</p>
    </div>
</div>
<div class="col-sm-4">

    <!-- Type Field -->
    <div class="col-sm-12">
        {!! Form::label('type', 'Type:') !!}
        <p>{{ $load->shipper->type? $load->shipper->type:'-' }}</p>
    </div>

    <!-- qty Field -->
    <div class="col-sm-12">
        {!! Form::label('qty', 'Quantity:') !!}
        <p>{{ $load->shipper->qty? $load->shipper->qty:'-' }}</p>
    </div>

    <!-- weight Field -->
    <div class="col-sm-12">
        {!! Form::label('weight', 'Weight:') !!}
        <p>{{ $load->shipper->weight? $load->shipper->weight:'-' }}</p>
    </div>

    <!-- customs_broker Field -->
    <div class="col-sm-12">
        {!! Form::label('customs_broker', 'Customs Broker:') !!}
        <p>{{ $load->shipper->customs_broker? $load->shipper->customs_broker:'-' }}</p>
    </div>
</div>
@endif
@if($load->consignee)
<!-- Consignee -->
<div class="col-md-12"
    style="border-bottom: 1px solid #38383cc2;
    margin: 10px 0 10px 0; color: #38383cc2;
    text-transform: uppercase;">
    <div class="form-group row">
        <strong>Consignee</strong>
    </div>
</div>

<div class="col-sm-4">
    <!-- con_name Field -->
    <div class="col-sm-12">
        {!! Form::label('con_name', 'Consignee name:') !!}
        <p>{{$load->consignee->con_name? $load->consignee->con_name:'-'}}</p>
    </div>

    <!-- con_location Field -->
    <div class="col-sm-12">
        {!! Form::label('con_location', 'Location:') !!}
        <p>{{ $load->consignee->con_location? $load->consignee->con_location:'-' }}</p>
    </div>

    <!-- consign_date Field -->
    <div class="col-sm-12">
        {!! Form::label('consign_date', 'Consignee Date:') !!}
        <p>{{ $load->consignee->consign_date? $load->consignee->consign_date:'-' }}</p>
    </div>

    <!-- con_description Field -->
    <div class="col-sm-12">
        {!! Form::label('con_description', 'Description:') !!}
        <p>{{ $load->consignee->con_description? $load->consignee->con_description:'-' }}</p>
    </div>

</div>
<div class="col-sm-4">
    <!-- con_type Field -->
    <div class="col-sm-12">
        {!! Form::label('con_type', 'Type:') !!}
        <p>{{ $load->consignee->con_type? $load->consignee->con_type:'-' }}</p>
    </div>

    <!-- con_qty Field -->
    <div class="col-sm-12">
        {!! Form::label('con_qty', 'Quantity:') !!}
        <p>{{ $load->consignee->con_qty? $load->consignee->con_qty:'-' }}</p>
    </div>

    <!-- consign_time Field -->
    <div class="col-sm-12">
        {!! Form::label('consign_time', 'Consignee Time:') !!}
        <p>{{ $load->consignee->consign_time? $load->consignee->consign_time:'-' }}</p>
    </div>

    <!-- con_weight Field -->
    <div class="col-sm-12">
        {!! Form::label('con_weight', 'Weight:') !!}
        <p>{{ $load->consignee->con_weight? $load->consignee->con_weight:'-' }}</p>
    </div>
</div>
<div class="col-sm-4">

    <!-- con_notes Field -->
    <div class="col-sm-12">
        {!! Form::label('con_notes', 'Notes:') !!}
        <p>{{ $load->consignee->con_notes? $load->consignee->con_notes:'-' }}</p>
    </div>

    <!-- con_po_number Field -->
    <div class="col-sm-12">
        {!! Form::label('con_po_number', 'PO Number:') !!}
        <p>{{ $load->consignee->con_po_number? $load->consignee->con_po_number:'-' }}</p>
    </div>
    <!-- con_amt Field -->
    <div class="col-sm-12">
        {!! Form::label('con_amt', 'Amount:') !!}
        <p>{{ $load->consignee->con_amt? $load->consignee->con_amt:'-' }}</p>
    </div>
</div>
@endif
