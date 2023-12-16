@extends('dashboard.layouts.master')
@section('content')
{!! Form::open(['route'=>'category.store', 'method'=>'POST', 'files'=>true]) !!}
<div class="row justify-content-center">
    <div class="col-md-8">
        <fieldset>
            <legend>Category Information</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-input-group">
                        {!! Form::label('name', 'Category Name') !!}
                        {!! Form::text('name', null, ['class'=>'form-control form-control-sm '.($errors->has('name') ?
                        'is-invalid':''), 'placeholder'=>'Ex. Technology'])
                        !!}
                        <x-validation-error :error="$errors->first('name')" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-input-group">
                        {!! Form::label('slug', 'Category Slug') !!}
                        {!! Form::text('slug', null, ['class'=>'form-control form-control-sm '.($errors->has('slug') ?
                        'is-invalid':''), 'placeholder'=>'Ex. technology'])
                        !!}
                        <x-validation-error :error="$errors->first('name')" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-input-group">
                        {!! Form::label('status', 'Category Status') !!}
                        {!! Form::select('status', \App\Models\Category::STATUS_LIST,null, ['class'=>'form-select
                        form-select-sm '.($errors->has('status') ?
                        'is-invalid':''), 'placeholder'=>'Select Status'])
                        !!}
                        <x-validation-error :error="$errors->first('status')" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-input-group">
                        {!! Form::label('parent_id', 'Parent Category') !!}
                        {!! Form::select('parent_id', $categories, null, ['class'=>'form-select
                        form-select-sm '.($errors->has('parent_id') ?
                        'is-invalid':''), 'placeholder'=>'Select Parent'])
                        !!}
                        <x-validation-error :error="$errors->first('parent_id')" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="custom-input-group">
                        {!! Form::label('description', 'Category Description') !!}
                        {!! Form::textarea('description', null, ['class'=>'form-control form-control-sm
                        '.($errors->has('description') ?
                        'is-invalid':''), 'placeholder'=>'Ex. Category Description', 'rows'=>5])
                        !!}
                        <x-validation-error :error="$errors->first('description')" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-input-group">
                        <x-image-upload :label="'Upload Image'" :name="'photo'" />
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="col-md-4">
        @include('dashboard.global_partials.seo')
    </div>
    <div class="col-md-12 mt-4">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Save</button>
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