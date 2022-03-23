<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image', 'Path Image:') !!}
    <div class="gallery gallery-md">
        <div class="gallery-item" data-image="{{$bannerHomepage->path_image}}" data-title="Image 1" href="{{$bannerHomepage->path_image}}" title="Image 1" style="background-image: url({{$bannerHomepage->path_image}});"></div>
    </div>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $bannerHomepage->title }}</p>
</div>

<!-- Category Field -->
<div class="form-group">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $bannerHomepage->category }}</p>
</div>

<!-- Button Title Field -->
<div class="form-group">
    {!! Form::label('button_title', 'Button Title:') !!}
    <p>{{ $bannerHomepage->button_title }}</p>
</div>

<!-- Button Url Field -->
<div class="form-group">
    {!! Form::label('button_url', 'Button Url:') !!}
    <p><a href="{{ $bannerHomepage->button_url }}">{{ $bannerHomepage->button_url }}</a></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $bannerHomepage->created_at->format("d/m/Y h:i:s") }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $bannerHomepage->updated_at->format("d/m/Y h:i:s") }}</p>
</div>