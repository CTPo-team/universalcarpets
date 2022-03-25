<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'readonly' => 'readonly']) !!}
</div>

@if($aboutUsPage->id == 1 || $aboutUsPage->id == 2)
    <!-- Header Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('header', 'Header:') !!}
        {!! Form::text('header', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'required' => 'required']) !!}
    </div>
@endif

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
        {!! Form::label('path_image_technologies', 'Image:') !!}
        <p>
            <small>Max Size: 2MB | Max File: 10 | Recommended: Less than 500KB & Resolution 1024 × 576 px</small>
        </p>
        <input id="multiple_image_upload" type="file" class="form-control fileinput-image-multiple"  name="multiple_image_upload[]" data-preview-file-type="text" multiple>
        <input type="hidden" name="path_image_technologies" id="path_image_technologies">
        @section('scriptsfileinput')
            <script>
                setMultipleFile("#multiple_image_upload","#path_image_technologies", <?php echo json_encode(isset($aboutUsPage->path_image_technologies) ? $aboutUsPage->path_image_technologies : []); ?>)
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

@if($aboutUsPage->id == 1)
    <!-- Frame Youtube Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('frame_youtube', 'Youtube:') !!}
        <a href="https://support.google.com/youtube/answer/171780?hl=en" target="_blank"><small>How To Embed Youtube</small></a>
        {!! Form::text('frame_youtube', null, ['class' => 'form-control','required' => 'required']) !!}
    </div>
    <!-- Path Image Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('path_image_certificate', 'Image Certificate:') !!}
        <p>
            <small>Max Size: 2MB | Max File: 1 | Recommended: Less than 500KB & Resolution 1217 × 1714 px</small>
        </p>
        <input id="single_image_upload_certificate" type="file" class="form-control"  name="single_image_upload_certificate" data-preview-file-type="text">
        <input type="hidden" name="path_image_certificate" id="path_image_certificate">
    </div>

    <!-- Path Image Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('path_image_strategy', 'Image Strategy:') !!}
        <p>
            <small>Max Size: 2MB | Max File: 1 | Recommended: Less than 500KB & Resolution 1959 × 1106 px</small>
        </p>
        <input id="single_image_upload" type="file" class="form-control"  name="single_image_upload" data-preview-file-type="text">
        <input type="hidden" name="path_image_strategy" id="path_image_strategy">
    </div>

    <!-- Path Image Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('path_image_home', 'Image Homepage:') !!}
        <p>
            <small>Max Size: 2MB | Max File: 3 | Recommended: Less than 500KB & Resolution 1279 × 856 px, 279 x 449 px</small>
        </p>
        <input id="multiple_image_upload" type="file" class="form-control"  name="multiple_image_upload[]" data-preview-file-type="text" multiple>
        <input type="hidden" name="path_image_home" id="path_image_home">
        @section('scriptsfileinput')
            <script>
                setSingleFile("#single_image_upload_certificate","#path_image_certificate", <?php echo json_encode(isset($aboutUsPage->path_image_certificate) ? $aboutUsPage->path_image_certificate : []); ?>)
                setSingleFile("#single_image_upload","#path_image_strategy", <?php echo json_encode(isset($aboutUsPage->path_image_strategy) ? $aboutUsPage->path_image_strategy : []); ?>)
                setMultipleFileWithMax("#multiple_image_upload","#path_image_home", <?php echo json_encode(isset($aboutUsPage->path_image_home) ? $aboutUsPage->path_image_home : []); ?>,3)
            </script>
        @endsection
    </div>
@endif

@if($aboutUsPage->id == 2)
    <!-- Path Image Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('path_image_network', 'Image:') !!}
        <p>
            <small>Max Size: 2MB | Max File: 1 | Recommended: Less than 500KB & Resolution 540 × 312 px</small>
        </p>
        <input id="single_image_upload_network" type="file" class="form-control"  name="single_image_upload_network" data-preview-file-type="text">
        <input type="hidden" name="path_image_network" id="path_image_network">
    </div>
    @section('scriptsfileinput')
        <script>
            setSingleFile("#single_image_upload_network","#path_image_network", <?php echo json_encode(isset($aboutUsPage->path_image_network) ? $aboutUsPage->path_image_network : []); ?>)
        </script>
    @endsection
@endif
@include('layouts.seo')

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('aboutUsPages.index') }}" class="btn btn-light">Cancel</a>
</div>
