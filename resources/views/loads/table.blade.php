<div class="table-responsive">
    <table class="table" id="loads-table">
        <thead>
        <tr>
            
            <th>Action</th>
            <th>Load No</th>
            <th>Bill To</th>
            <th>Dispatcher</th>
            <th>Shipper Name</th>
            <th>Consignee Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($loads as $load)
            <tr>
                
                <td width="120">
                    {!! Form::open(['route' => ['loads.destroy', $load->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('loads.show', [$load->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye" style='color:blue'></i>
                        </a>
                        <a href="{{ route('loads.edit', [$load->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit" style='color:navy;'></i>
                        </a>
                        <a href="{{ route('loads.pdf', [$load->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="fas fa-print" style='color:green;'></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
                <td>{{$load->load_no}}</td>
                <td>{{$load->bill_to}}</td>
                <td>{{$load->dispatcher}}</td>
                <td>{{$load->shipper? $load->shipper->name: null}}</td>
                <td>{{$load->consignee? $load->consignee->con_name: null}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
