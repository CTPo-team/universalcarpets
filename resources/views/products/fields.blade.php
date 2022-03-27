<!-- Product Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_category_id', 'Product Category:') !!}
    {!! Form::select('product_category_id', $productCategory, null,['class' => 'form-control select2','maxlength' => 255,'maxlength' => 255, 'required' => 'required']) !!}
</div>

<!-- Product Brand Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_brand_id', 'Product Brand:') !!}
    {!! Form::select('product_brand_id', $productBrand, null,['class' => 'form-control select2','maxlength' => 255,'maxlength' => 255, 'required' => 'required']) !!}
</div>


<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'required' => 'required']) !!}
</div>

<!-- Path Image Thumbnail Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('path_image_thumbnail', 'Thumbnail Image:') !!}
    <p>
        <small>Max Size: 2MB | Max File: 1 | Recommended: Less than 500KB & Resolution 2480 × 1753 px</small>
    </p>
    <input id="single_image_upload" type="file" class="form-control"  name="single_image_upload" data-preview-file-type="text">
    <input type="hidden" name="path_image_thumbnail" id="path_image_thumbnail">
</div>

<!-- Path Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('path_image', 'Image:') !!}
    <p>
        <small>Max Size: 2MB | Max File: 10 | Recommended: Less than 500KB & Resolution 364 × 404 px</small>
    </p>
    <input id="multiple_image_upload" type="file" class="form-control"  name="multiple_image_upload[]" data-preview-file-type="text" multiple>
    <input type="hidden" name="path_image" id="path_image">
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc', 'Description:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control summernote']) !!}
</div>

<!-- Featured Field -->
<div class="form-group col-sm-12">
    {!! Form::label('featured', 'Featured:') !!}
    {!! Form::select('featured', [1 => "Yes", 0 => "No"], null,['class' => 'form-control select2','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', [1 => "Active", 0 => "Inactive"], null,['class' => 'form-control select2','maxlength' => 255,'maxlength' => 255]) !!}
</div>

@include('layouts.seo')

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-light">Cancel</a>
</div>

@section('scriptsfileinput')
    <script>
        setSingleFile("#single_image_upload","#path_image_thumbnail", <?php echo json_encode(isset($product->path_image_thumbnail) ? $product->path_image_thumbnail : []); ?>)
        setMultipleFile("#multiple_image_upload","#path_image", <?php echo json_encode(isset($product->path_image) ? $product->path_image : []); ?>)
    </script>
@endsection