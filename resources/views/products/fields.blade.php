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

@if(isset($product))
    <!-- Path Image Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('path_image_thumbnail', 'Current Thumbnail Image:') !!}
        <div class="gallery gallery-md">
            <div class="gallery-item" data-image="{{asset('img/product/'.$product->path_image_thumbnail)}}" data-title="Image 1" href="{{asset('img/product/'.$product->path_image_thumbnail)}}" title="Image 1" style="background-image: url({{asset('img/product/'.$product->path_image_thumbnail)}});"></div>
        </div>
    </div>
@endif


<!-- Path Image Thumbnail Field -->
<div class="form-group col-sm-12 col-lg-12">
    @if(isset($product))
        {!! Form::label('path_image_thumbnail', 'Replace Thumbnail Image:') !!}
    @else
        {!! Form::label('path_image_thumbnail', 'Thumbnail Image:') !!}
    @endif
    <input id="path_image_thumbnail" type="file" class="form-control fileinput-image"  name="path_image_thumbnail" data-preview-file-type="text" {{ !isset($product->id) ? 'required' : ''}}>
</div>

@if(isset($product))
    <!-- Path Image Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('path_image', 'Current Image:') !!}
        <div class="gallery gallery-md">
            @foreach ($product->imageProduct as $key => $img)
                <div class="gallery-item" data-image="{{asset('img/product/'.$img->path_image)}}" data-title="Image {{$key}}" href="{{asset('img/product/'.$img->path_image)}}" title="Image {{$key}}" style="background-image: url({{asset('img/product/'.$img->path_image)}});"></div>
            @endforeach
        </div>
    </div>
@endif

<!-- Path Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    @if(isset($product))
        {!! Form::label('path_image', 'Replace Image:') !!}
    @else
        {!! Form::label('path_image', 'Image:') !!}
    @endif
   
    <input id="path_image" type="file" class="form-control fileinput-image-multiple"  name="path_image[]" data-preview-file-type="text" {{ !isset($product->id) ? 'required' : ''}} multiple>
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
