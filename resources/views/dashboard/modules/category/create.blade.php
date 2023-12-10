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
                    <div class="col-md-6"></div>
                </div>
                <div class="col-md-6">
                    <div class="custom-input-group">
                        {!! Form::label('slug', 'Category Slug') !!}
                        {!! Form::text('slug', null, ['class'=>'form-control form-control-sm '.($errors->has('slug') ?
                        'is-invalid':''), 'placeholder'=>'Ex. technology'])
                        !!}
                        <x-validation-error :error="$errors->first('name')" />
                    </div>
                    <div class="col-md-6"></div>
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
                    <div class="col-md-6"></div>
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
                    <div class="col-md-6"></div>
                </div>
                <div class="col-md-6">
                    <div class="custom-input-group">
                        {!! Form::label('description', 'Category Description') !!}
                        {!! Form::textarea('description', null, ['class'=>'form-control form-control-sm
                        '.($errors->has('description') ?
                        'is-invalid':''), 'placeholder'=>'Ex. technology', 'rows'=>5])
                        !!}
                        <x-validation-error :error="$errors->first('description')" />
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="col-md-4">
        <fieldset>
            <legend>SEO Information</legend>
            <div class="custom-input-group">
                {!! Form::label('meta_title', 'Meta Title') !!}
                {!! Form::text('meta_title', null, ['class'=>'form-control form-control-sm
                '.($errors->has('meta_title')
                ?
                'is-invalid':''), 'placeholder'=>'Ex. Technology'])
                !!}
                <x-validation-error :error="$errors->first('meta_title')" />
            </div>
            <div class="custom-input-group">
                {!! Form::label('meta_keywords', 'Meta Keywords') !!}
                {!! Form::text('meta_keywords', null, ['class'=>'form-control form-control-sm
                '.($errors->has('meta_keywords')
                ?
                'is-invalid':''), 'placeholder'=>'Ex. Technology'])
                !!}
                <x-validation-error :error="$errors->first('meta_keywords')" />
            </div>
            <div class="custom-input-group">
                {!! Form::label('meta_description', 'Meta Description') !!}
                {!! Form::textarea('meta_description', null, ['class'=>'form-control form-control-sm
                '.($errors->has('meta_description')
                ?
                'is-invalid':''), 'placeholder'=>'Ex. Technology', 'rows'=>5])
                !!}
                <x-validation-error :error="$errors->first('meta_description')" />
            </div>
        </fieldset>
    </div>
    {!! Form::close() !!}
    @endsection