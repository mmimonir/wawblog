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
        'is-invalid':''), 'placeholder'=>'Ex. Meta Description', 'rows'=>5])
        !!}
        <x-validation-error :error="$errors->first('meta_description')" />
    </div>
    <div class="col-md-6">
        <div class="custom-input-group">
            <x-image-upload :label="'Upload OG Image'" :name="'og_image'" />
        </div>
    </div>
</fieldset>