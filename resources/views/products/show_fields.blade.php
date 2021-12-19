<!-- Product Category Id Field -->
<div class="form-group">
    {!! Form::label('product_category_id', 'Product Category:') !!}
    <p>{{ $product->productCategory->title }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $product->title }}</p>
</div>

<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image', 'Image:') !!}
    <div class="gallery gallery-md">
        @foreach ($product->imageProduct as $key => $img)
            <div class="gallery-item" data-image="{{asset('img/product/'.$img->path_image)}}" data-title="Image {{$key}}" href="{{asset('img/product/'.$img->path_image)}}" title="Image {{$key}}" style="background-image: url({{asset('img/product/'.$img->path_image)}});"></div>
        @endforeach
    </div>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Desc:') !!}
    <p>{!! $product->desc !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $product->status == 1 ? "<div class='badge badge-success'>Active</div>" : "<div class='badge badge-danger'>Inactive</div>" !!}</p>
</div>



