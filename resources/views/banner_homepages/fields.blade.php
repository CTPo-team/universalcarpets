

<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'required' => 'required']) !!}
</div>

<!-- Path Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('path_image', 'Image:') !!}
    <p>
        <small>Max Size: 2MB | Max File: 1 | Recommended: Less than 500KB & Resolution 3010 × 2007 px</small>
    </p>
    <input id="single_image_upload" type="file" class="form-control"  name="single_image_upload" data-preview-file-type="text">
    <input type="hidden" name="path_image" id="path_image">
</div>

<!-- Category Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::text('category', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Button Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('button_title', 'Button Title:') !!}
    {!! Form::text('button_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Button Url Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('button_url', 'Button URL:') !!}
    <p>
        <small>Recommended: use <b> https:// </b></small>
    </p>
    {!! Form::text('button_url', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', [1 => "Active", 0 => "Inactive"], null,['class' => 'form-control select2','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bannerHomepages.index') }}" class="btn btn-light">Cancel</a>
</div>

@section('scriptsfileinput')
    <script>
        setSingleFile("#single_image_upload","#path_image", <?php echo json_encode(isset($bannerHomepage->path_image) ? $bannerHomepage->path_image : []); ?>)
    </script>
@endsection