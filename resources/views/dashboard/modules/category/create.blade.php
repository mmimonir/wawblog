@extends('dashboard.layouts.master')
@section('content')
<div class="row justify-content-center">

    <div class="col-md-8">
        {!! Form::open(['route'=>'category.store', 'method'=>'POST', 'files'=>true]) !!}
        <div class="custom-input-group">
            {!! Form::label('name', 'Category Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Ex. Technology'])
            !!}
        </div>
        {!! Form::close() !!}
    </div>

</div>
@endsection
