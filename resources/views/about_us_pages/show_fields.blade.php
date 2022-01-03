<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $aboutUsPage->title }}</p>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Desc:') !!}
    <p>{!! $aboutUsPage->desc !!}</p>
</div>

<!-- Short Desc Field -->
<div class="form-group">
    {!! Form::label('short_desc', 'Short Desc:') !!}
    <p>{!! $aboutUsPage->short_desc !!}</p>
</div>

@if($aboutUsPage->id == 3)
<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image', 'Image:') !!}
    <div class="gallery gallery-md">
        @foreach ($aboutUsPage->aboutUsGallery as $key => $img)
            <div class="gallery-item" data-image="{{asset('img/about/'.$img->path_image)}}" data-title="Image {{$key}}" href="{{asset('img/about/'.$img->path_image)}}" title="Image {{$key}}" style="background-image: url({{asset('img/about/'.$img->path_image)}});"></div>
        @endforeach
    </div>
</div>
@endif

