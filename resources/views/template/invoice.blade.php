<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .invoice-title h2, .invoice-title h3 {
            display: inline-block;
        }

        .table > tbody > tr > .no-line {
            border-top: none;
        }

        .table > thead > tr > .no-line {
            border-bottom: none;
        }

        .table > tbody > tr > .thick-line {
            border-top: 2px solid;
        }
        @media print {
          .hidden-print {
            display: none !important;
          }
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="invoice-title">
                    <h2>Invoice</h2><h3 class="pull-right">Load#: {{$load->load_no}}</h3>
                    <div class="hidden-print" style="position: absolute;right: 50%;top: 0;">
                        <a href="javascript:window.print();" class="btn btn-info">Print</a>
                        <a href="/loads" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                        <strong>Payable To:</strong><br>
                            <!-- John Smith<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Springfield, ST 54321 -->
                        </address>
                    </div>
                    <div class="col-xs-6 text-right">
                        <address style="width: 150px;float: right;">
                        <strong>Bill To:</strong><br>
                            {{$load->bill_to}}
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-4 text-right">
                        <table class="table table-condensed">
                            <tr>
                                <td class="text-left"><strong>INVOICE #</strong></td>
                                <td><strong>{{$load->load_no}}</strong></td>
                            </tr>
                            <tr>
                                <td class="text-left">Invoice Date:</td>
                                <td>{{Carbon\Carbon::now()->format('Y-m-d')}}</td>
                            </tr>
                            <tr>
                                <td class="text-left">Terms:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-left">W/O (Ref):</td>
                                <td>{{$load->wo}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>LOAD DETAILS</strong></h3>
                    </div>
                    <div class="panel-body">
                        @if($load->shipper)
                        <div class="row" style="background-color: #bec3c536;padding: inherit;">
                            <div class="col-md-4">
                               <p>
                                   <strong>Shipper:</strong>
                                   <span>{{$load->shipper->name}}</span>
                               </p>
                               <p>
                                   <strong>Type:</strong>
                                   <span>{{$load->shipper->type}}</span>
                               </p> 
                            </div>
                            <div class="col-md-4">
                               <p>
                                   <strong>Quantity:</strong>
                                   <span>{{$load->shipper->qty}}</span>
                               </p>
                               <p>
                                   <strong>Weight:</strong>
                                   <span>{{$load->shipper->weight}}</span>
                               </p> 
                            </div>
                            <div class="col-md-4">
                               <p>
                                   <strong>Date:</strong>
                                   <span>{{$load->shipper->ship_date}}</span>
                               </p>
                               <p>
                                   <strong>Purchase Order#:</strong>
                                   <span>{{$load->shipper->po_number}}</span>
                               </p> 
                            </div>
                            <div class="col-md-12">
                                <p>
                                   <strong>Description:</strong>
                                   <span>{{$load->shipper->description}}</span>
                               </p> 
                            </div>
                        </div>
                        @endif
                        @if($load->consignee)
                        <div class="row" style="padding: inherit;">
                            <div class="col-md-4">
                               <p>
                                   <strong>Consignee:</strong>
                                   <span>{{$load->consignee->con_name}}</span>
                               </p>
                               <p>
                                   <strong>Type:</strong>
                                   <span>{{$load->consignee->con_type}}</span>
                               </p> 
                            </div>
                            <div class="col-md-4">
                               <p>
                                   <strong>Quantity:</strong>
                                   <span>{{$load->consignee->con_qty}}</span>
                               </p>
                               <p>
                                   <strong>Weight:</strong>
                                   <span>{{$load->consignee->con_weight}}</span>
                               </p> 
                            </div>
                            <div class="col-md-4">
                               <p>
                                   <strong>Date:</strong>
                                   <span>{{$load->consignee->consign_date}}</span>
                               </p>
                               <p>
                                   <strong>Purchase Order#:</strong>
                                   <span>{{$load->consignee->con_po_number}}</span>
                               </p> 
                            </div>
                            <div class="col-md-12">
                                <p>
                                   <strong>Description:</strong>
                                   <span>{{$load->consignee->con_description}}</span>
                               </p> 
                            </div>
                        </div>
                        @endif
                        <hr>
                        <div class="col-md-12">
                            <h4><strong>RATES AND CHARGES</strong></h4>
                        </div>
                           <div class="col-md-6">
                               <strong>Total Rate:</strong>
                           </div> 
                        <div class="col-md-6">
                            @php
                            $price = (float)$load->other_charges + (float)$load->usd_rate
                            @endphp
                            <span>{{$price}} USD</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    window.print();
</script>