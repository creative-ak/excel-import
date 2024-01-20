<div class="table-responsive">
    <table class="table" id="loads-table">
        <thead>
        <tr>
            
            <th>Action</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile No.</th>
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
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('loads.edit', [$load->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
                <td>{{$load->name}} {{$load->middle_name}} {{$load->last_name}}</td>
                <td>{{$load->email}}</td>
                <td>{{$load->mobile}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
