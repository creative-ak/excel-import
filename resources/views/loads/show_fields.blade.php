<div class="col-sm-6">
    <!-- Name Field -->
    <div class="col-sm-12">
        {!! Form::label('name', 'Name:') !!}
        <p>{{$user->name}} {{$user->middle_name}} {{$user->last_name}}</p>
    </div>

    <!-- Mobile Field -->
    <div class="col-sm-12">
        {!! Form::label('mobile', 'Mobile No:') !!}
        <p>{{ $user->mobile }}</p>
    </div>

    <!-- city Field -->
    <div class="col-sm-12">
        {!! Form::label('city', 'City:') !!}
        <p>{{ $user->city }}</p>
    </div>
</div>
<div class="col-sm-6">
    <!-- Email At Field -->
    <div class="col-sm-12">
        {!! Form::label('email', 'Email:') !!}
        <p>{{ $user->email }}</p>
    </div>

    <!-- State Field -->
    <div class="col-sm-12">
        {!! Form::label('state', 'State:') !!}
        <p>{{ $user->state }}</p>
    </div>

    <!-- Address Field -->
    <div class="col-sm-12">
        {!! Form::label('address', 'Address:') !!}
        <p>{{ $user->address }}</p>
    </div>
</div>

