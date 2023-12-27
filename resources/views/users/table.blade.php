<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
        <tr>
            
            <th>Action</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile No.</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                
                <td width="120">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('users.edit', [$user->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        @if(auth()->user()->id != $user->id)
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        @endif
                    </div>
                    {!! Form::close() !!}
                </td>
                <td>{{$user->name}} {{$user->middle_name}} {{$user->last_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
