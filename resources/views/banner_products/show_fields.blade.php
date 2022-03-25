<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image', 'Image:') !!}
    <div class="gallery gallery-md">
        <div class="gallery-item" data-image="{{$bannerProduct->path_image}}" data-title="Image 1" href="{{$bannerProduct->path_image}}" title="Image 1" style="background-image: url({{$bannerProduct->path_image}});"></div>
    </div>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $bannerProduct->title }}</p>
</div>

<!-- Category Field -->
<div class="form-group">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $bannerProduct->category }}</p>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Description:') !!}
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                {!! $bannerProduct->desc !!}
            </p>
        </div>
    </div>
</div>

<!-- Button Title Field -->
<div class="form-group">
    {!! Form::label('button_title', 'Button Title:') !!}
    <p>{{ $bannerProduct->button_title }}</p>
</div>

<!-- Button Url Field -->
<div class="form-group">
    {!! Form::label('button_url', 'Button Url:') !!}
    <p><a href="{{ $bannerProduct->button_url }}">{{ $bannerProduct->button_url }}</a></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $bannerProduct->created_at->format("d/m/Y h:i:s") }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $bannerProduct->updated_at->format("d/m/Y h:i:s") }}</p>
</div>