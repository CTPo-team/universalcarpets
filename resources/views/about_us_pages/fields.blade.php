<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly' => 'readonly']) !!}
</div>

@if($aboutUsPage->id == 1 || $aboutUsPage->id == 2)
<!-- Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc', 'Description:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control summernote', 'required' => 'required']) !!}
</div>
@endif

<!-- Short Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_desc', 'Short Description:') !!}
    {!! Form::textarea('short_desc', null, ['class' => 'form-control summernote-simple']) !!}
</div>

@if($aboutUsPage->id == 3)

    <!-- Path Image Field -->
    <div class="form-group col-sm-12 col-lg-12">
        <p>
            <small>Max Size: 2MB | Max File: 10 | Recommended: Less than 500KB & Resolution 1024 × 576 px</small>
        </p>
        <input id="multiple_image_upload" type="file" class="form-control fileinput-image-multiple"  name="multiple_image_upload[]" data-preview-file-type="text" multiple>
        <input type="hidden" name="path_image" id="path_image">
        @section('scriptsfileinput')
            <script>
                setMultipleFile("#multiple_image_upload","#path_image", <?php echo json_encode(isset($aboutUsPage->path_image) ? $aboutUsPage->path_image : []); ?>)
            </script>
        @endsection
    </div>
@endif

@if($aboutUsPage->id == 1)
<!-- Our Strategy Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('our_strategy_desc', 'Our Strategy Description:') !!}
    {!! Form::textarea('our_strategy_desc', null, ['class' => 'form-control summernote', 'required' => 'required']) !!}
</div>
@endif

@include('layouts.seo')

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('aboutUsPages.index') }}" class="btn btn-light">Cancel</a>
</div>
