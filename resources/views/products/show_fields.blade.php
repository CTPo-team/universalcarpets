<!-- Product Category Id Field -->
<div class="form-group">
    {!! Form::label('product_category_id', 'Product Category:') !!}
    <p>{{ isset($product->productCategory->parent) && !empty($product->productCategory->parent) ? $product->productCategory->parent->title : $product->productCategory->title }}</p>
</div>

<div class="form-group">
    {!! Form::label('product_sub_category', 'Product Sub-Category:') !!}
    <p>{{ isset($product->productCategory->parent) && !empty($product->productCategory->parent) ? $product->productCategory->title : "-" }}</p>
</div>

<!-- Product Brand Id Field -->
<div class="form-group">
    {!! Form::label('product_brand_id', 'Product Brand:') !!}
    <p>{{ $product->productBrand->title }}</p>
</div>


<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $product->title }}</p>
</div>

<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image_thumbnail', 'Thumbnail Image:') !!}
    <div class="gallery gallery-md">
        <div class="gallery-item" data-image="{{$product->path_image_thumbnail}}" data-title="Image 1" href="{{$product->path_image_thumbnail}}" title="Image 1" style="background-image: url({{$product->path_image_thumbnail}});"></div>
    </div>
</div>

<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image', 'Image:') !!}
    <div class="gallery gallery-md">
        @foreach ($product->path_image as $key => $img)
            <div class="gallery-item" data-image="{{$img}}" data-title="Image {{$key}}" href="{{$img}}" title="Image {{$key}}" style="background-image: url({{$img}});"></div>
        @endforeach
    </div>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Description:') !!}
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                {!! $product->desc !!}
            </p>
        </div>
    </div>
</div>

<!-- Featured Field -->
<div class="form-group">
    {!! Form::label('featured', 'Featured:') !!}
    <p>{!! $product->featured == 1 ? "<div class='badge badge-success'>Yes</div>" : "<div class='badge badge-danger'>No</div>" !!}</p>
</div>


<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $product->status == 1 ? "<div class='badge badge-success'>Active</div>" : "<div class='badge badge-danger'>Inactive</div>" !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $product->created_at->format("d/m/Y h:i:s") }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $product->updated_at->format("d/m/Y h:i:s") }}</p>
</div>

