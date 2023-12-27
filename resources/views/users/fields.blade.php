
<div class="col-md-6">
    <!-- Name Field -->
    <div class="form-group row">
        {!! Form::label('name', 'First Name:', ['class'=>'control-label text-right col-md-4']) !!}
        <div class="col-md-8">      
            {!! Form::text('name', null, ['class' => 'form-control']) !!}       
        </div>
    </div>
</div>
<div class="col-md-6">
    <!-- Middle name Field -->
    <div class="form-group row">
        {!! Form::label('middle_name', 'Middle Name:', ['class'=>'control-label text-right col-md-4']) !!}
        <div class="col-md-8">      
            {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}       
        </div>
    </div>
</div>
<div class="col-md-6">
    <!-- Last name Field -->
    <div class="form-group row">
        {!! Form::label('last_name', 'Last Name:', ['class'=>'control-label text-right col-md-4']) !!}
        <div class="col-md-8">      
            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}       
        </div>
    </div>
</div>
<div class="col-md-6">
    <!-- Mobile No Field -->
    <div class="form-group row">
        {!! Form::label('mobile', 'Mobile No:', ['class'=>'control-label text-right col-md-4']) !!}
        <div class="col-md-8">      
            {!! Form::text('mobile', null, ['class' => 'form-control']) !!}       
        </div>
    </div>
</div>
<div class="col-md-6">
    <!-- Email Field -->
    <div class="form-group row">
        {!! Form::label('email', 'Email:', ['class'=>'control-label text-right col-md-4']) !!}
        @if(request()->segment(3) == 'edit' && auth()->user()->id == $user->id)
        <div class="col-md-8">      
            {!! Form::text('email', null, ['class' => 'form-control','readonly']) !!}       
        </div>
        @else
        <div class="col-md-8">      
            {!! Form::text('email', null, ['class' => 'form-control']) !!}       
        </div>
        @endif
    </div>
</div>
<div class="col-md-6">
    <!-- State Field -->
    <div class="form-group row">
        {!! Form::label('state', 'State:', ['class'=>'control-label text-right col-md-4']) !!}
        <div class="col-md-8">      
            {!! Form::text('state', null, ['class' => 'form-control']) !!}       
        </div>
    </div>
</div>
<div class="col-md-6">
    <!-- city Field -->
    <div class="form-group row">
        {!! Form::label('city', 'City:', ['class'=>'control-label text-right col-md-4']) !!}
        <div class="col-md-8">      
            {!! Form::text('city', null, ['class' => 'form-control']) !!}       
        </div>
    </div>
</div>
<div class="col-md-6">
    <!-- address Field -->
    <div class="form-group row">
        {!! Form::label('address', 'Address:', ['class'=>'control-label text-right col-md-4']) !!}
        <div class="col-md-8">      
            {!! Form::text('address', null, ['class' => 'form-control']) !!}       
        </div>
    </div>
</div>