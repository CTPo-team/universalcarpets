<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'disabled' => 'disabled']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control summernote', 'required' => 'required']) !!}
</div>

<!-- Short Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_desc', 'Short Desc:') !!}
    {!! Form::textarea('short_desc', null, ['class' => 'form-control summernote-simple']) !!}
</div>

@if($aboutUsPage->id == 3)
    <!-- Path Image Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('path_image', 'Image:') !!}
        <input id="path_image" type="file" class="form-control fileinput-image-multiple"  name="path_image[]" data-preview-file-type="text" required multiple>
    </div>
@endif

@include('layouts.seo')

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('aboutUsPages.index') }}" class="btn btn-light">Cancel</a>
</div>
