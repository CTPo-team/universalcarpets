<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'required' => 'required']) !!}
</div>

<!-- Path Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('path_image', 'Image:') !!}
    <p>
        <small>Max Size: 2MB | Max File: 1 | Recommended: Less than 500KB & Resolution 1920 × 1082 px</small>
    </p>
    <input id="single_image_upload" type="file" class="form-control"  name="single_image_upload" data-preview-file-type="text">
    <input type="hidden" name="path_image" id="path_image">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bannerAboutus.index') }}" class="btn btn-light">Cancel</a>
</div>

@section('scriptsfileinput')
    <script>
        setSingleFile("#single_image_upload","#path_image", <?php echo json_encode(isset($bannerAboutUs->path_image) ? $bannerAboutUs->path_image : []); ?>)
    </script>
@endsection