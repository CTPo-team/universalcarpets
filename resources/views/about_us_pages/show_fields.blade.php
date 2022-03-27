<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $aboutUsPage->title }}</p>
</div>

@if($aboutUsPage->id == 1 || $aboutUsPage->id == 2)

<div class="form-group">
    {!! Form::label('header', 'Header:') !!}
    <p>{{ $aboutUsPage->header }}</p>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Description:') !!}
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                {!! $aboutUsPage->desc !!}
            </p>
        </div>
    </div>
</div>
@endif


<!-- Short Desc Field -->
<div class="form-group">
    {!! Form::label('short_desc', 'Short Description:') !!}
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                {!! $aboutUsPage->short_desc !!}
            </p>
        </div>
    </div>
</div>

@if($aboutUsPage->id == 2)
    <div class="form-group">
        {!! Form::label('path_image_network', 'Image:') !!}
        <div class="gallery gallery-md">
            <div class="gallery-item" data-image="{{$aboutUsPage->path_image_network}}" data-title="Image 1" href="{{$aboutUsPage->path_image_network}}" title="Image 1" style="background-image: url({{$aboutUsPage->path_image_network}});"></div>
        </div>
    </div>
@endif

@if($aboutUsPage->id == 3)
<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image_technologies', 'Image:') !!}
    <div class="gallery gallery-md">
        @foreach ($aboutUsPage->path_image_technologies as $key => $img)
            <div class="gallery-item" data-image="{{$img}}" data-title="Image {{$key}}" href="{{$img}}" title="Image {{$key}}" style="background-image: url({{$img}});"></div>
        @endforeach
    </div>
</div>
@endif

@if($aboutUsPage->id == 1)
<!-- Youtube Field -->
<div class="form-group">
    {!! Form::label('frame_youtube', 'Youtube:') !!}
    <p><a href="{{ $aboutUsPage->frame_youtube }}">{{ $aboutUsPage->frame_youtube }}</a></p>
</div>

<!-- Our Strategy Desc Field -->
<div class="form-group">
    {!! Form::label('our_strategy_desc', 'Our Strategy Description:') !!}
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                {!! $aboutUsPage->our_strategy_desc !!}
            </p>
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('path_image_certificate', 'Image Certificate:') !!}
    <div class="gallery gallery-md">
        <div class="gallery-item" data-image="{{$aboutUsPage->path_image_certificate}}" data-title="Image 1" href="{{$aboutUsPage->path_image_certificate}}" title="Image 1" style="background-image: url({{$aboutUsPage->path_image_strategy}});"></div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('path_image_strategy', 'Image Strategy:') !!}
    <div class="gallery gallery-md">
        <div class="gallery-item" data-image="{{$aboutUsPage->path_image_strategy}}" data-title="Image 1" href="{{$aboutUsPage->path_image_strategy}}" title="Image 1" style="background-image: url({{$aboutUsPage->path_image_strategy}});"></div>
    </div>
</div>

<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image_home', 'Image Homepage:') !!}
    <div class="gallery gallery-md">
        @foreach ($aboutUsPage->path_image_home as $key => $img)
            <div class="gallery-item" data-image="{{$img}}" data-title="Image {{$key}}" href="{{$img}}" title="Image {{$key}}" style="background-image: url({{$img}});"></div>
        @endforeach
    </div>
</div>
@endif

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $aboutUsPage->created_at->format("d/m/Y h:i:s") }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $aboutUsPage->updated_at->format("d/m/Y h:i:s") }}</p>
</div>