<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $aboutUsPage->title }}</p>
</div>

@if($aboutUsPage->id == 1 || $aboutUsPage->id == 2)
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

@if($aboutUsPage->id == 3)
<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image', 'Image:') !!}
    <div class="gallery gallery-md">
        @foreach ($aboutUsPage->path_image as $key => $img)
            <div class="gallery-item" data-image="{{$img}}" data-title="Image {{$key}}" href="{{$img}}" title="Image {{$key}}" style="background-image: url({{$img}});"></div>
        @endforeach
    </div>
</div>
@endif

@if($aboutUsPage->id == 1)
<!-- Our Strategy Desc Field -->
<div class="form-group">
    {!! Form::label('our_strategy_desc', 'Our Strategy Description:') !!}
    <p>{!! $aboutUsPage->our_strategy_desc !!}</p>
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