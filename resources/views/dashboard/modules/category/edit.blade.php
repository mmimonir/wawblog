@extends('dashboard.layouts.master')
@section('content')
{!! Form::model($category,['route'=>['category.update', $category->id], 'method'=>'PUT', 'files'=>true]) !!}
<div class="row justify-content-center">
    @include('dashboard.modules.category.partials.form')
    <div class="col-md-12 mt-4">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
    {!! Form::close() !!}
    @endsection
    @push('script')
    <script>
        $('#name').on('input', function(){
            let name = $(this).val();
            let slug = name.replace(/\s+/g, '-').toLowerCase();
            $('#slug').val(slug);
            $('#meta_title').val(name);
            $('#meta_keywords').val(name.replaceAll(' ', ', '));
        })
        $('#description').on('input', function(){
            let description = $(this).val();
            $('#meta_description').val(description);
        })
    </script>
    @endpush
