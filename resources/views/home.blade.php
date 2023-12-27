


 @extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Upload Excel For User Create</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">

            {!! Form::open(['route' => 'upload','enctype' => 'multipart/form-data']) !!}

            <div class="card-body">

                <div class="row justify-content-md-center">
                    <div class="form-group">
                        <label for="fileUpload">Upload Excel File *</label>
                        <input type="file" class="form-control-file" name="excel" id="fileUpload" 
                        accept="csv" required>
                    </div>
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
